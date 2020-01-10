<?php

    session_start();
    
    require_once('serverConnection.php');

    $title = $start_new = $end_new = $time = $candid_nos = "";
    $titleErr = $startErr = $endErr = $timeErr = $candidErr = "";


    if(isset($_POST['submit'])) {

        $title         =   mysqli_real_escape_string($connection, trim($_POST['title']));
        $start_new     =   mysqli_real_escape_string($connection, trim($_POST['sdate']));
        $end_new       =   mysqli_real_escape_string($connection, trim($_POST['edate']));
        $candid_nos    =   mysqli_real_escape_string($connection, trim($_POST['candid']));

        if(!empty($title) && !empty($candid_nos)) {

            $sql = "INSERT INTO electiondata (e_id, title, startdate, enddate, candidnos) VALUES ('NULL', '$title', '$start_new', '$end_new', '$candid_nos')";
            $query = mysqli_query($connection, $sql);

            if($query) {

                header('location: electionCandidate.php');
            }else {
                echo "not added";
                die();
            }
        
        }else {

            $titleErr = "Title or Number of Candidate must not be empty";
        }

        mysqli_close($connection);



    }




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
                        </i><a class="nav-link">Welcome <span> <?php echo $_SESSION['login_user']; ?> </span></a>
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
        <div class="election-header text-center">
            <h5 class="card-title display-4 mt-5">Create an Election</h5>
        </div>

        <!--  -->
        <div class="container mt-5 fn7">
            <form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
            
            <?php


                $_SESSION['title'] = $title;
                $_SESSION['sdate'] = $start_new;
                $_SESSION['edate'] = $end_new;

            ?>
                <div class="form-group">
                    <label for="Title"><strong>Title</strong> <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="form-control" type="text" value="<?php echo $title; ?>" name="title" placeholder="Title of the Election">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $titleErr; ?> </span>
                </div>
                
                <div class="form-group">
                    <label for="StartDate"><strong>Start Date</strong><span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </span>
                            <input class="form-control" value="<?php echo $start; ?>" name="sdate" type="date">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $startErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="EndDate"><strong>End Date</strong><span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </span>
                            <input class="form-control" value="<?php echo $end; ?>" name="edate" type="date">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $endErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="CandidateNos"><strong>Number of Candidates</strong></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="form-control" value="<?php echo $candid_nos; ?>" name="candid" type="number" placeholder="Candidate Number">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $titleErr; ?> </span>
                </div>
               <button type="submit" name="submit" class="btn btn-primary">Continue</button>
            </form>
    </div>


    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>