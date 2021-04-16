<?php include("header.php"); ?>
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
                            <li class="active">Payment Completed</li>
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
                                <strong class="card-title">Wifi Uers</strong>
                            </div>
                            <div class="card-body">
                            <?php 
                                include 'dbconfig.php';
                                
                                $query = "SELECT * FROM neefwifitb ORDER BY id DESC";
                                $result = mysqli_query($connection,$query) or die("Failed...!");

                                $count = mysqli_num_rows($result);
                                // if($count > 0) {
                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customar ID</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Village Name</th>
                                            <th>House Number</th>
                                            <!-- <th>Area Code</th>
                                            <th>Package</th>
                                            <th>Starting Month</th>
                                            <th>Paya</th>
                                            <th>Activation Date</th>
                                            <th>Billing Date</th>
                                            <th>status</th>
                                            <th>Due Payment</th> -->
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       while ($row = mysqli_fetch_assoc($result)) {  
                                             $deu = $row['due_payment'];     
                                             
                                             if( $deu == '0' ) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customar_id']; ?></td>
                                            <td><img class="img_siz rounded" height="70px" width="75px" src="images/<?php echo $row['photo']; ?>" alt=""></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['mobile_number']; ?></td>
                                            <td><?php echo $row['village_name']; ?></td>
                                            <td><?php echo $row['house_number']; ?></td>
                                        <!-- <td><?php // echo $row['area_code']; ?></td>
                                            <td><?php// echo $row['area_code']; ?></td>
                                            <td><?php// echo $row['area_code']; ?></td>
                                            <td><?php// echo $row['package']; ?></td>
                                            <td><?php// echo $row['starting_month']; ?></td>
                                            <td><?php// echo $row['p_amount']; ?></td>
                                            <td><?php// echo $row['activation_date']; ?></td>
                                            <td><?php// echo $row['b_date']; ?></td>
                                            <td><?php// echo $row['status']; ?></td>
                                            <td><?php// echo $row['due_payment']; ?></td> -->
                                            <td class='edit'>
                                                 <form action="wifi-user-update.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" id="delete" name="edit_btn" class="btn btn-success text-light"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                 </form>
                                            </td>
                                        </tr>
                                    <?php }
                                    } ?>
                                    </tbody>
                                </table>
                                <?php //} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


<?php include("footer.php"); ?>