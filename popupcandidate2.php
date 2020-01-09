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

                $sql = "SELECT * FROM candidate_info WHERE f_id = 7";

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
                <a type="button" href="vote.php" class="btn btn-secondary">Cancel</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                YES
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title display-5" id="exampleModalLabel">SIGN YOUR BALLOT</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>EMAIL: NOTIFICATION OF BALLOT CONFIRMATION</strong></p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><strong>Email Address</strong></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </form>
                            <ul class="list-group mb-5 mt-4">
                                <li class="list-group-item">Enter a valid Email address to Confirmation your Ballot</li>
                                <li class="list-group-item">Your ballot will be unsucessfull without a valid Email</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-secondary p-2" data-dismiss="modal">DISCARD BALLOT</a>
                            <button type="button" class="btn btn-primary p-2">SUBMIT BALLOT</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!--  -->

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