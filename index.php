<?php


session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> user page</title>


    <!-- Custom styles for this template-->
    <link href="css/bootstrap.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <!-- Nested Row within Card Body -->

                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome !</h1>
                            </div>
                            <div class="text-center">
                                <h4 class="h4 text-gray-900 mb-4">
                                    <?php

                                    if(isset($_SESSION['success']))
                                    {
                                        ?>

                                        <?php
                                        echo $_SESSION['user2'];
                                        echo($_SESSION['success2']);

                                    }
                                    ?>
                                </h4>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->


</body>

</html>
