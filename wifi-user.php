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
                            <li class="active">wifi users</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ml-3 mt-2" data-toggle="modal" data-target="#exampleModalLong">
        Add New
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                        <label for=""><b>Customar ID</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" name="c_id" aria-label="Default" placeholder="Customar Id" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>User Name</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="user_name" placeholder="User Name" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Mobile Number</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="m_number" placeholder="Mobile Number" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Village Name</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-vine" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="v_name" placeholder="village name" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>House Number</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-vine" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="h_number" placeholder="House number" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Area Code</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-code" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="a_code" placeholder="Area Code" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Package</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="package" placeholder="Package" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>payable Amount</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-money" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="p_amount" placeholder="P Amount" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Starting Month</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="date" class="form-control" aria-label="Default" name="s_month" placeholder="Starting Month" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Activation Date</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <input type="date" class="form-control" aria-label="Default" name="a_date" placeholder="Activation Date" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Billing Date</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="date" class="form-control" aria-label="Default" name="b_date" placeholder="Billing Date" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>suatus</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-home" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="suatus" placeholder="status" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <label for=""><b>Deu Payment</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-money" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" name="d_payment" placeholder="Deu Payment" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="image-upload pb-3">
                                 <input type="file" name="image" id="customFile" />
                            </div>
                            <button class="btn btn-success text-right" name="register-btn" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div><!-- Modal --->


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">              
                        <div class="card">
                        <?php 
                            if(isset($_SESSION['update']) && $_SESSION['update'] !='') {
                                echo '<span class="alert alert-info" role="alert">'.$_SESSION['update'].'</span>';
                                unset($_SESSION['update']);
                        }
                        elseif (isset($_SESSION['not-allowed']) && $_SESSION['not-allowed'] !='')
                        {
                            echo '<span class="alert alert-danger" role="alert">'.$_SESSION['not-allowed'].'</span>';
                            unset($_SESSION['not-allowed']);
                        }
                        elseif (isset($_SESSION['file_size']) && $_SESSION['file_size'] !='')
                        {
                            echo '<span class="alert alert-danger" role="alert">'.$_SESSION['file_size'].'</span>';
                            unset($_SESSION['file_size']);
                        }
                        elseif (isset($_SESSION['status']) && $_SESSION['status'] !='')
                        {
                            echo '<span class="alert alert-danger" role="alert">'.$_SESSION['status'].'</span>';
                            unset($_SESSION['status']);
                        }
                ?>
                            <div class="card-header">
                                <strong class="card-title">Wifi Uers</strong>
                            </div>
                            <div class="card-body">
                          
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customar ID</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Village Name</th>
                                            <th>House Number</th>
                                            <th>Billing Date</th>
                                            <th>Days</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include 'dbconfig.php';
                                        $query = "SELECT * FROM neefwifitb ORDER BY id DESC";
                                        $result = mysqli_query($connection,$query) or die("Failed...!");
                                        while ($row = mysqli_fetch_assoc($result)) {  
                                        $bdate = $row['b_date']; 
                                        $decibel = $row['descibel'];   
                                                
                                         if( $decibel != 'decibel') {
                                         
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customar_id']; ?></td>
                                            <td><img class="img_siz rounded" height="70px" width="75px" src="images/<?php echo $row['photo']; ?>" alt=""></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['mobile_number']; ?></td>
                                            <td><?php echo $row['village_name']; ?></td>
                                            <td><?php echo $row['house_number']; ?></td>
                                            <td><?php echo $row['b_date']; ?></td>
                                            <td>
                                            <?php 
                                                $date1= date_create($bdate); 
                                                $date2=date_create("");
                                                $diff=date_diff($date1,$date2);
                                                $d_count = $diff->format("%R%a days");
                                                echo $d_count;
                                            ?></td>
                                            <td class='edit'>
                                                 <form action="wifi-user-update.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" id="delete" name="edit_btn" class="btn btn-success text-light"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                 </form>
                                            </td>
                                        </tr>
                                       
                                    <?php }
                                      }
                                    ?>
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