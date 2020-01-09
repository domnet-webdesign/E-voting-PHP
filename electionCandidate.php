<?php

    session_start();

    require_once('serverConnection.php');


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
<body class="fn100">

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
<div id="back_g">

    
    <!--  -->
    <nav class="nav p-3 mb-5 border border-primary border-top-0">
        <div class="container clearfix">
            <h4 class="nav-link float-left font-weight-bold display-4">Dashboard</h4>
            <a class="nav-link float-right btn-success rounded mt-3 p-3" href="election.php">New Election</a>
        </div>
    </nav>
    <!--  -->

    <!--  -->

    <div class="container">
        <table class="table table-striped table-dark mb-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><?php echo $_SESSION['title']; ?></td>
                    <td><?php echo $_SESSION['sdate']; ?></td>
                    <td><?php echo $_SESSION['edate']; ?></td>
                    <td>Pending</td>
                </tr>

            </tbody>
        </table>
    </div>

    <!--  -->

    <!--  -->
    <section id="candiddate">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 candid-col mb-3">
                    <div class="card fn90">
                    <?php

                        $sql = "SELECT * FROM candidate_info WHERE f_id = 1";
                        $query = mysqli_query($connection, $sql);

                        while ($rows = mysqli_fetch_array($query)) {

                    ?>
                        <img class="card-img-top rounded-circle" src=" <?php echo $rows['image']; ?>" alt="candidate name">
                        <div class="card-body candidate_history">
                            <h4 class="card-title">Candidate Information</h4>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Candidate Name:</strong> <?php echo $rows['candidName']; ?> </li>
                                    <li class="list-group-item"><strong>Candidate Position:</strong> <?php echo $rows['candidPosition']; ?> </li>
                                    <li class="list-group-item"><strong>Organisation:</strong> <?php echo $rows['organSch']; ?> </li>
                                    <li class="list-group-item"><strong>Party/Group:</strong> <?php echo $rows['candidGroup']; ?> </li>
                                    <li class="list-group-item"><strong>Status:</strong> <?php echo $rows['status']; ?></li>
                                </ul>
                            <p>
                                <button class="btn btn-primary mt-3 p-2" type="button" data-toggle="collapse" 
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    More About Candidate
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body text-justify">

                                <?php echo $rows['candidDetail']; ?>
                                    <br>
                                    <a href="#">Official candidate page</a>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 candid-col mb-3">
                    <div class="card fn90">
                    <?php
                        $sql1 = "SELECT * FROM candidate_info WHERE f_id = 7";
                        $query1 = mysqli_query($connection, $sql1);

                        while($rows = mysqli_fetch_array($query1)) {
                    ?>

                        <img class="card-img-top rounded-circle" src=" <?php echo $rows['image']; ?> " alt="candidate name">
                        <div class="card-body candidate_history">
                            <h4 class="card-title">Candidate Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Candidate Name:</strong> <?php echo $rows['candidName']; ?> </li>
                                <li class="list-group-item"><strong>Candidate Position:</strong> <?php echo $rows['candidPosition']; ?> </li>
                                <li class="list-group-item"><strong>Organisation:</strong> <?php echo $rows['organSch']; ?> </li>
                                <li class="list-group-item"><strong>Party/Group:</strong> <?php echo $rows['candidGroup']; ?> </li>
                                <li class="list-group-item"><strong>Status:</strong> <?php echo $rows['status']; ?></li>
                            </ul>
                            <p>
                                <button class="btn btn-primary mt-3 p-2 " type="button" data-toggle="collapse" 
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    More About Candidate
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body text-justify">
                                <?php echo $rows['candidDetail']; ?>
                                <br>
                                    <a href="#">Official candidate page</a>
                                </div>
                            </div>

                    <?php } ?>
                    
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 candid-col mb-5">
                    <div class="card fn90">
                        <img class="card-img-top rounded-circle" src="images/f_avatar.png" alt="candidate name">
                        <div class="card-body candidate_history">
                            <h4 class="card-title">Candidate Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Candidate Name:</strong> UBONG UDOFIA </li>
                                <li class="list-group-item"><strong>Candidate Position:</strong> PRESIDENT</li>
                                <li class="list-group-item"><strong>Organisation:</strong> Domnet Group</li>
                                <li class="list-group-item"><strong>Party:</strong> W.E.B</li>
                                <li class="list-group-item"><strong>Status:</strong> Pending</li>
                            </ul>
                            <p>
                                <button class="btn btn-primary mt-3 p-2" type="button" data-toggle="collapse" 
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    More About Candidate
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body text-justify">
                                    Mark John is a Nigerian businessman, television personality, author, politician, 
                                    and the WEB Party nominee for the President of the World Bank group Feburary 2020 Election.<br>
                                    <a href="#">Official candidate page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="vote.php" class="btn btn-success font-weight-bolder w-100 p-3">CONTINUE TO VOTE</a>
        </div>
    </section>

    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--  -->











    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>