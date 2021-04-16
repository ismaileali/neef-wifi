<?php include 'header.php'; ?>

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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
         <div class="content mt-3">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <a href="wifi-user.php" class="text-light">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                        <?php
                             include "dbconfig.php";
                             $query = "SELECT * FROM neefwifitb ORDER BY id";
                             $query_run = mysqli_query($connection, $query) or die("query Fell...!");
                             $count = 0;
                             while ($row = mysqli_fetch_assoc($query_run)) {
                                $descibel = $row['descibel'];
                                if( $descibel != 'decibel') {
                                    $count++;
                                }  
                            }                 
                        ?>
                            <span class="count"><?php echo $count; ?></span>
                        </h4>
                        <p class="text-light">Wifi Users</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-2">
                <a href="payment-completed.php" class="text-light">
                    <div class="card-body pb-0">
                            <h4 class="mb-0">
                            <?php
                                include "dbconfig.php";
                                $query = "SELECT * FROM neefwifitb ORDER BY id";
                                $query_run = mysqli_query($connection, $query) or die("query Fell...!");
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($query_run)){
                                    $deu = $row['due_payment'];
                                    if($deu == 0){
                                        $count++;
                                    } 
                                }
                            ?>
                                <span class="count"><?php echo $count; ?></span>
                            </h4>
                            <p class="text-light">Payment Completed</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                <a href="due-payment.php" class="text-light">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                        <?php
                             include "dbconfig.php";
                             $query = "SELECT * FROM neefwifitb ORDER BY id";
                             $query_run = mysqli_query($connection, $query) or die("query Fell...!");
                             $count = 0;
                             while ($row = mysqli_fetch_assoc($query_run)) {
                                $deu = $row['due_payment'];
                                if($deu != 0){
                                    $count++;
                                }  
                            }                 
                        ?>
                            <span class="count">
                            <?php echo $count; ?></span>
                        </h4>
                        <p class="text-light">Due Payment</p>
                    </div>
                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-danger">
                <a href="decibel.php" class="text-light">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                        <?php
                             include "dbconfig.php";
                             $query = "SELECT * FROM neefwifitb ORDER BY id";
                             $query_run = mysqli_query($connection, $query) or die("query Fell...!");
                             $count = 0;
                             while ($row = mysqli_fetch_assoc($query_run)) {
                                $descibel = $row['descibel'];
                                if( $descibel != '' && $descibel != 'enable') {
                                    $count++;
                                }  
                            }                 
                        ?>
                            <span class="count"><?php echo $count; ?></span>
                        </h4>
                        <p class="text-light">Decibel Users</p>
                    </div>
                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                <a href="due-payment.php" class="text-light">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">456</span>
                        </h4>
                        <p class="text-light">SMS</p>
                    </div>
                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    </div>
                    </a>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php
         
    
    include 'footer.php'; ?>