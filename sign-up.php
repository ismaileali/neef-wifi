<?php include "header.php";
//   session_start();
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 ">
                        <div class="card">
                            <div class="card-header"> <strong>Sign Up</strong> </div>
                            <div class="card-body card-block">
                                <form action="n_code.php" method="POST">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="user" class="form-control" placeholder="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-fire" aria-hidden="true"></i></div>
                                            <select class="form-control" name="role" >
                                                <option value="1">Admin</option>
                                                <option value="0">Editor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group mb-0"><button type="submit" name="register" class="btn btn-success btn-sm">Sign Up</button></div>
                                </form>
                                
                            </div>
                            <?php 
                                        if(isset($_SESSION['alert']) && $_SESSION['alert'] !='')
                                        {
                                            echo '<span class="mx-3 alert alert-danger" role="alert">'.$_SESSION['alert'].'</span>';
                                            unset($_SESSION['alert']);
                                        }                           
                                ?>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
<?php }
 include "footer.php"; ?>