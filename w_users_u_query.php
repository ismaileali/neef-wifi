<?php 
session_start();
// Update wifi users 
include "dbconfig.php";

if(isset($_POST['submit'])) {
    $id = $_POST['edit_id'];
    $customar_id = $_POST['customar_id'];
    $username = $_POST['user_name'];
    $mobilenumber = $_POST['m_number'];
    $valligename = $_POST['v_name'];
    $house_number = $_POST['h_number'];
    $area_code = $_POST['a_code'];
    $package = $_POST['package'];
    $s_month = $_POST['s_month'];
    $p_amount = $_POST['p_amount'];
    $d_payment = $_POST['d_payment'];
    $a_date = $_POST['a_date'];
    $b_date = $_POST['b_date'];
    $d_remaining = $_POST['d_remaining'];
    $suatus = $_POST['suatus'];
    $decibel = $_POST['decibel'];

    
    $query = "UPDATE neefwifitb SET customar_id='$customar_id',username='$username',mobile_number='$mobilenumber',village_name='$valligename',house_number='$house_number',area_code='$area_code',package='$package',starting_month='$s_month',p_amount='$p_amount',activation_date='$a_date',b_date='$b_date',status='$suatus',due_payment='$d_payment',days_remaining='$d_remaining',descibel='$decibel' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query) or die("query Fell...!");
  
    if($query_run)
    {
        $_SESSION['update'] = "Data number ( ".$customar_id." ) has been updated.";
        header('Location: wifi-user.php'); 
    }
    else
    {
        header('Location: wifi-user-update.php'); 
    }
}
// delete user
include "dbconfig.php";

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM neefwifitb WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been deleted";
        $_SESSION['status_code'] = "success";
        header('Location: wifi-user.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: wifi-user-update.php'); 
    }    
}
  mysqli_close();
?>
    
