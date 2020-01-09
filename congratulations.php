<?php


require_once('serverConnection.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congratulations for your Vote</title>
    <link rel="stylesheet" href="./bootstrap/css/all.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">E-VOTING & POLLING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  -->

    <div class="election-header text-center bg-priamry">
        <h4 class="card-title display-4 p-3 mb-2 bg-primary text-white font-weight-bold">CONGRATULATIONS!!!</h4>
    </div>
    <div class="container">
        <div class="jumbotron mt-5">
            <div class="card-body text-center">
                <h3 class="card-text mb-4">Your ballot has been submitted to our Voting System</h3>
                <h5><a href="index.php" class="card-link font-weight-bold">Back to our Site</a>
                <a href="registration.php" class="card-link font-weight-bold">Sign Up</a></h5>
            </div>
        </div>

        <div class="terms text-center">
            <p><strong>E-Voting & Polling</strong> - <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | 
            &copy; 2020 <a href="#">Domnet Web Service</a></p>
        </div>
    </div>

    <!--  -->
    





    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>