<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./bootstrap/css/all.css"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kumar+One|Lobster|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">

</head>
<body>

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">DOMNET VOTE & POLL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto fn1">
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link btn" href="login.php">LOGIN</a>
                    </li>
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link btn" href="registration.php">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navigation ends -->

    <!--  -->

    <div class="main-banner text-center text-white">
        <div class="container">
            <h2 class="display-3">We Make Online Elections Easy</h2>
            <div class="header-text">
                <p>
                    Domnet Vote and Poll is a secure online voting platform that makes <br> it easy to run elecions at a fraction of the usual cost.
                </p>
                <div class="card-btn mt-5">
                    <a href="electionCandidate.php" class="card-link btn-success p-3 font-weight-bold rounded">Join Our Polling</a>
                    <a href="election.php" class="card-link btn-success p-3 font-weight-bold rounded">New Election</a>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!--  -->
    <div id="services">
        <h3 class="text-center">Our Voting Services</h3>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-3 col-md-4 col-sm-12 mb-4 text-center">
                    <div class="fn901  text-white">
                        <div class="box">
                            <div class="center-box rounded-circle mt-4">
                                <i class="fas fa-calendar fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-title mt-4">
                            <h4 class="mb-2 font-weight-bold">Secured Online Elections</h4>
                        </div>
                        <div class="card-text ">
                            <p>
                                With our Secured Online Election you can send your 
                                voters a secured link that ensure only authrized voters to vote, once.
                            </p>         
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-4 text-center">
                    <div class="fn901 text-white">
                        <div class="box">
                            <div class="center-box rounded-circle mt-4">
                                <i class="fas fa-calendar fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-title mt-4">
                            <h4 class="mb-2 font-weight-bold">Online Polls</h4>
                        </div>
                        <div class="card-text">
                            <p>
                                Create a personalized poll that anyone can vote on, 
                                and publicize it using your website, email or social media
                            </p>         
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-4 text-center">
                    <div class="fn901 text-white">
                        <div class="box">
                            <div class="center-box rounded-circle mt-4">
                                <i class="fas fa-calendar fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-title mt-4">
                            <h4 class="mb-2 font-weight-bold">Ballot Count</h4>
                        </div>
                        <div class="card-text">
                            <p>
                                Our system automatically count users ballot and save it to the voting server
                            </p>         
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 mb-4 text-center">
                    <div class="fn901 text-white">
                        <div class="box">
                            <div class="center-box rounded-circle mt-4">
                                <i class="fas fa-calendar fa-2x"></i>
                            </div>
                        </div>
                        <div class="card-title mt-4">
                            <h4 class="mb-2 font-weight-bold">Monitoring Tool</h4>
                        </div>
                        <div class="card-text">
                            <p>
                                Our monitoring tools update you on real time progress
                                of the election, making in control of the election
                            </p>         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="footer text-center">
        <p class="fn780">Start Making All Votes Matter</p>
        <a href="registration.php" class="btn btn-default p-4 fn609">Sign Up and Try it Free</a>
    </div>
    <!--  -->
    <!--  -->
    <div class="footer-content text-center bg-dark">
        <p class="p-2">Signing up signifies you've read and agree to our <br> 
            <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a>
        </p>
    </div>
    <!--  -->
    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <!-- <script src="./bootstrap/js/all.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>