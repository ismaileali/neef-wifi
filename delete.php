<?php include 'dbconfig.php';
   
   $de_id = $_GET['id'];

   $query = "DELETE FROM registeruser WHERE id='{$de_id}'";

   $result = mysqli_query($connection,$query);

   if($result) {
       header("location: users.php");
   }else {
       echo "Can't Delete User.";
   }
   mysqli_close($connection);


?>