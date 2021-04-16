<?php include "header.php";
         if($_SESSION['user_role'] == '1'){ 
       
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <?php  if(isset($_SESSION['alert']) && $_SESSION['alert'] !='') {
                                    echo '<span class="alert alert-info" role="alert">'.$_SESSION['alert'].'</span>';
                                    unset($_SESSION['alert']);
                                } ?>
                            <div class="card-header">
                                <strong class="card-title">WIFI ALL USERS</strong>
                            </div>
                            <div class="card-body">
                            <?php 
                               
                                include 'dbconfig.php';
                                
                                $query = "SELECT * FROM registeruser ORDER BY id DESC";
                                $result = mysqli_query($connection,$query) or die("Failed...!");

                                $count = mysqli_num_rows($result);
                                if($count > 0) {
                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       while ($row = mysqli_fetch_assoc($result)) {                                
                                    ?>
                                        <tr>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php if($row['role'] == 1) {
                                                echo "Admin";
                                            }else {
                                                echo "Editor";
                                            }
                                             ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><a onclick="return confirm('Are You Sure?')" href="delete.php?id=<?php echo $row['id'] ?>" classt="text-danger">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <?php } ?>
                                </table>
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

  <?php  }
   include "footer.php"; ?>