<?php  include("reg.php");         ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->

    <!-- Custom styles for this template-->

    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-10">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>


                        <form class="user" action="" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <?php   if(isset($_SESSION['errors1'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors1']; ?>
                                        </div>
                                    <?php   }  ?>


                                    <?php   if(isset($_SESSION['errors5'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors5']; ?>
                                        </div>
                                    <?php   }  ?>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" name="name"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <?php   if(isset($_SESSION['errors2']) ) {   ?>
                                    <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo $_SESSION['errors2']; ?>
                                    </div>
                                <?php }?>

                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email"  >
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <?php   if(isset($_SESSION['errors3'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors3']; ?>
                                        </div>
                                    <?php   }  ?>
                                    <?php   if(isset($_SESSION['errors7'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors7']; ?>
                                        </div>
                                    <?php   }  ?>

                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" >
                                </div>
                                <div class="col-sm-6">

                                    <?php   if(isset($_SESSION['errors4'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors4']; ?>
                                        </div>
                                    <?php   }  ?>
                                    <?php   if(isset($_SESSION['errors7'])) {   ?>
                                        <div style = "font-size:11px; color:#cc0000; margin-top:5px"><?php echo  $_SESSION['errors7']; ?>
                                        </div>
                                    <?php   }  ?>
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="Rpassword" >

                                </div>
                            </div>
                            <div class="form-group">
                                <button  class="btn btn-primary btn-user btn-block" type="submit" name="regbtn">
                                    Submit
                                </button>
                            </div>
                            <hr>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
</body>

</html>




