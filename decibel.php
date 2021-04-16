
<?php include("header.php"); ?>
        <div class="breadcrumbs">
            <div class="col">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Decibel Uers</li>
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
                            <div class="card-header">
                                <strong class="card-title">Decibel Uers</strong>
                            </div>
                            <div class="card-body">
                            <?php 
                                include 'dbconfig.php';
                                
                                $query = "SELECT * FROM neefwifitb ORDER BY id DESC";
                                $result = mysqli_query($connection,$query) or die("Failed...!");

                                $count = mysqli_num_rows($result);
                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customar ID</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Village Name</th>
                                            <th>Due Payment</th>
                                            <th>Descibel</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                    <?php
                                       while ($row = mysqli_fetch_assoc($result)) {
                                        $decibel = $row['descibel'];   
                                                
                                         if( $decibel != '' && $decibel != 'enable') {                            
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customar_id']; ?></td>
                                            <td><img class="img_siz rounded" height="70px" width="75px" src="images/<?php echo $row['photo']; ?>" alt=""></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['mobile_number']; ?></td>
                                            <td><?php echo $row['village_name']; ?></td>
                                            <td><?php echo $row['due_payment']; ?></td> 
                                            <td class="text-light bg-danger"><?php echo $row['descibel']; ?></td> 
                                            <td class='edit'>
                                                 <form action="wifi-user-update.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-success text-light"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                 </form>
                                            </td>
                                        </tr>
                                    <?php }
                                            } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

<?php include("footer.php"); ?>