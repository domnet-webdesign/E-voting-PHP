<?php


require_once('serverConnection.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate 1</title>
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

    <!--  -->
    <div class="container">
        <div class="card text-center mt-5 fn400">
            <div class="card-header display-4">
                Ballot Confirmation
            </div>

            <?php

                $sql = "SELECT * FROM candidate_info WHERE f_id = 1";

                $query = mysqli_query($connection, $sql);

                while ($rows = mysqli_fetch_array($query)) {

            ?>

            <div class="card-body">
                <h3 class="card-title">Are you sure you want to prepare an anonymous ballot with the following candidate selected?</h3>
                <div class="card-text text-center">
                    <p class="p-2 font-weight-bold">Your Choice is: </p>
                    <img src="<?php echo $rows['image']; ?>" width="70" class="rounded-circle pb-2" alt="">
                    <h4 class="display-5 pb-3 mt-3"><?php echo $rows['candidName']; ?></h4>
                </div>
            </div>
            <?php } ?>

            <div class="card-footer text-muted">
                <a type="button" href="vote.php" class="btn btn-secondary"> Cancel </a>
                <a type="button" href="pop.php" class="btn btn-primary"> YES </a>
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