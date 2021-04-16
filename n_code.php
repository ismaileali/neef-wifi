<?php 
     session_start();
        if (isset($_POST['register'])) {

        include 'dbconfig.php';

        $fulname = mysqli_real_escape_string($connection, $_POST['user']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, md5($_POST['password']));
        $role = mysqli_real_escape_string($connection, $_POST['role']);

        // check db tb name match
        $query = "SELECT username FROM registeruser WHERE  username='$fulname'";
        $result = mysqli_query($connection, $query) or die("query Fell...!");

        $count = mysqli_num_rows($result);

        if ($count > 0) {
        // echo "<font color='red'>User Name Already Exists...!</font>";
        $_SESSION['alert'] = "User Name Already Exists...!";
        header("Location: sign-up.php");
        }else{
        $query1 = "INSERT INTO registeruser (username,email,password,role) 
        VALUE ('$fulname','$email','$password','$role')";
        $result1 = mysqli_query($connection, $query1) or die("query Fell.........!");

            if ($result1) {
                $_SESSION['alert'] = "New user has been added.";
                header("Location: users.php");
            }
        }
    }                                
?>