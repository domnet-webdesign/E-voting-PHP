<?php

    session_start();

    $myemail = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <ul class="navbar-nav ml-auto fn1">
                    <li class="nav-item my-2 my-lg-0">
                        </i><a class="nav-link">Welcome <span> <?php echo $_SESSION['login_user'];?> </span></a>
                    </li>
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link" href="registration.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navigation ends -->

    <!--  -->

    <div class="container">
        <div class="jumbotron mt-5">
            <div class="card-body text-center">
                <h4 class="card-title display-4">Welcome to E-Voting and Polling</h4>
                <h5 class="card-subtitle mb-2 text-muted">Get started by creating your first election</h5>
                <p class="card-text font-weight-bold text-muted">Here you will manage eveerything about the election, the ballot, 
                    the list of voters, and the election's setting
                </p>
                <div class="card-btn mt-5">
                    <a href="electionCandidate.php" class="card-link btn-success p-3 font-weight-bold rounded">Join Our Polling</a>
                    <a href="election.php" class="card-link btn-success p-3 font-weight-bold rounded">New Election</a>
                </div>
            </div>
        </div>
    </div>
        
    <!--  -->

    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>