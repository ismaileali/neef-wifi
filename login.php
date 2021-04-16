<?php
     if(isset($_POST['username'])){
         header('location: index.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
    <title>login Page</title>
</head>
<body>
       <div class="container">
           <div class="row">
              <div class="loginy-form d-flex justify-content-center">
                   <div class="card col-md-4">
                        <div class="card-body">
                          <span class="img d-flex justify-content-center">
                          <img alt="avatar" class="img-fluid logo-img" src="images/avatar/wifi.jpg">
                          </span>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                <input type="text" class="form-control" name="user_name" placeholder="User Name">        
                                <input type="password" class="form-control my-3" name="user_password" placeholder="User Password">    
                                <button type="submit" class="btn btn-success w-100" name="submit">Login</button>  
                            </form>
                        </div>
                   </div>
              </div>
           </div>
       </div>
        <?php
            if(isset($_POST['submit'])) {
                include 'dbconfig.php';

                $user_name = mysqli_real_escape_string($connection,$_POST['user_name']);
                $user_password = md5($_POST['user_password']);

                $query = "SELECT id,username,role FROM registeruser WHERE username='{$user_name}' AND password='{$user_password}'";
             
                $result = mysqli_query($connection,$query) or die("Query Failed.");

                if(mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        session_start();

                        $_SESSION['username'] = $row['username'];
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['user_role'] = $row['role'];

                        header("location: index.php");
                    }

                }else {
                    echo "User name and password not matched.";
                }
            }      
        ?>

 <!-- Add script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 </body>
</html>