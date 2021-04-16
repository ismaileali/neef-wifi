<?php include("header.php"); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Wifi Users Update</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Wifi Update Users</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                    <?php           
                        include "dbconfig.php";
                        if(isset($_POST['edit_btn']))
                        {
                            $id = $_POST['edit_id']; 

                            $query = "SELECT * FROM neefwifitb WHERE id='$id' ";
                            $query_run = mysqli_query($connection, $query);
            
                            foreach($query_run as $row)
                            {
                                 $bdate = $row['b_date'];
                    ?>
                            <form action="w_users_u_query.php" method="post">
                              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Customar ID</b></label>
                                        <input type="text" class="form-control" placeholder="customar id" name="customar_id" value="<?php echo $row['customar_id']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>User Name</b></label>
                                        <input type="text" class="form-control" placeholder="Name" name="user_name" value="<?php echo $row['username']; ?>">
                                    </div>  
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Mobile Number</b></label>
                                        <input type="text" class="form-control" placeholder="Mobile Mumber" name="m_number" value="<?php echo $row['mobile_number']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Village Name</b></label>
                                        <input type="text" class="form-control" placeholder="Village Name" name="v_name" value="<?php echo $row['village_name']; ?>">
                                    </div>  
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>House Number</b></label>
                                        <input type="text" class="form-control" placeholder="House Number" name="h_number" value="<?php echo $row['house_number']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Area Code</b></label>
                                        <input type="text" class="form-control" placeholder="Area Code" name="a_code" value="<?php echo $row['area_code']; ?>">
                                    </div>  
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Package</b></label>
                                        <input type="text" class="form-control" placeholder="package" name="package" value="<?php echo $row['package']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Starting Month</b></label>
                                        <input type="date" class="form-control" placeholder="Starting Month" name="s_month" value="<?php echo $row['starting_month']; ?>">
                                    </div>                          
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>payable Amount</b></label>
                                        <input type="hidden" name="old_pamount" value="<?php $row['p_amount']; ?>">
                                        <input type="text" class="form-control" placeholder="P Amount" name="p_amount" value="<?php echo $row['p_amount']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Activation Date</b></label>
                                        <input type="date" class="form-control" placeholder="Activation Date" name="a_date" value="<?php echo $row['activation_date']; ?>">
                                    </div>  
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Billing Date</b></label>
                                        <input type="date" class="form-control" placeholder="Billing Date" name="b_date" value="<?php echo $row['b_date']; ?>">
                                    </div>                           
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Days Remaining</b></label> <!-- echo $row['days_remaining']; -->
                                        <input disabled type="text" class="form-control" placeholder="Days Remaining" name="d_remaining" value="<?php 
                                           $date1= date_create($bdate); 
                                           $date2=date_create("");
                                           $diff=date_diff($date1,$date2);
                                           echo $diff->format("%R%a days");
                                        ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Status</b></label>
                                        <input type="text" class="form-control" placeholder="status" name="suatus" value="<?php echo $row['status']; ?>">
                                    </div>                           
                                    <div class="col-md-6 mb-3">
                                        <label for=""><b>Due Payment</b></label>
                                        <input type="text" class="form-control" placeholder="Due Payment" name="d_payment" value="<?php echo $row['due_payment'];
                                        ?>">
                                    </div>
                                    <div class="btn-group card-body col-md-12 d-flex justify-content-between ">
                                        <input type="submit" name="submit" class="btn btn-success" value="Update" />
                                    </div>
                                </div>
                            </form>
                        <?php }
                             }else{
                                echo "Result Not Found";
                              }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php include("footer.php"); ?>