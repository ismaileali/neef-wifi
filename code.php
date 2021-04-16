<?php
   session_start();
    // Register Wifi users
    if (isset($_FILES['image'])) {
        
        include 'dbconfig.php';
        $error = array();

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $exta      = explode('.',$file_name);
        $file_ext = end($exta);

        $extensions = array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions) === false)
        {
            $errors[] = "This extension file not allowed, Please choose a JPG or PNG file";
            $_SESSION['not-allowed'] = "This extension file not allowed, Please choose a JPG or PNG file";
            header('Location: wifi-user.php'); 
        }

        if($file_size > 2097152) {
            $errors[] = "File size must be 2mb or lower.";
            $_SESSION['file_size'] = "File size must be 2mb or lower.";
            header('Location: wifi-user.php'); 
        }

        $new_name = time(). "_".basename($file_name);
        $target = "images/".$new_name;

        if(empty($errors) == true){
            move_uploaded_file($file_tmp,$target);
        }else{
            print_r($errors);
            die();
        }

        $userid = mysqli_real_escape_string($connection, $_POST['c_id']);
        $username = mysqli_real_escape_string($connection, $_POST['user_name']);
        $mnumber = mysqli_real_escape_string($connection, $_POST['m_number']);
        $vname = mysqli_real_escape_string($connection, $_POST['v_name']);
        $hnumber = mysqli_real_escape_string($connection, $_POST['h_number']);
        $acode = mysqli_real_escape_string($connection, $_POST['a_code']);
        $package = mysqli_real_escape_string($connection, $_POST['package']);
        $smonth = mysqli_real_escape_string($connection, $_POST['s_month']);
        $pamount = mysqli_real_escape_string($connection, $_POST['p_amount']);
        $adate = mysqli_real_escape_string($connection, $_POST['a_date']);
        $b_date = mysqli_real_escape_string($connection, $_POST['b_date']);
        $status = mysqli_real_escape_string($connection, $_POST['suatus']);
        $dpayment = mysqli_real_escape_string($connection, $_POST['d_payment']);

         // check db tb name match
         $query = "INSERT INTO neefwifitb (customar_id,photo,username,mobile_number,village_name,house_number,area_code,package,starting_month,p_amount,activation_date,status,due_payment,b_date) VALUES ('$userid','$new_name','$username','$mnumber','$vname','$hnumber','$acode','$package','$smonth','$pamount','$adate','$status','$dpayment','$b_date')";
         $result = mysqli_query($connection, $query) or die("query Fell...!");

         if ($result) {
            header("Location: wifi-user.php");
         }
        }




?>