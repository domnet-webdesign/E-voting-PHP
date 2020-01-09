<?php

    session_start();

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
    <link rel="stylesheet" href="./bootstrap/css/fontawesome.css">
    <link rel="stylesheet" href="./bootstrap/css/font-awesome.css">
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

    <section id="regis-content">
        <div class="container">
            <div class="jumbotron text-center">
                <h1 class="display-5 mb-3"> <span><?php echo $_SESSION['message'] = 'Thanks for your Registration'; ?></span> </h1>
                    <p class="lead font-weight-normal">We need to verify your email</p>
                <hr class="my-4">
                <p class="font-weight-normal mb-4"><strong>WELCOME <span><?php echo $_SESSION['firstname']; ?> To E-voting and Polling</strong> <br>
                An email was sent to: <strong><i><span> <?php echo $_SESSION['email']; ?> </span></i></strong></p>
                <p>Check your email inbox and click the confirmation link</p>
                <p class="lead mt-3">In case you don't receive an email within seconds, please check your email's spam or junk inbox.</p>

                <a class="btn btn-primary btn-lg mt-4" href="login.php" role="button">LOGIN</a>
            </div>

            <div class="terms text-center">
                <p><strong>E-Voting & Polling</strong> - <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | 
                &copy; 2020 <a href="#">Domnet Web Service</a></p>
            </div>
        </div>

    </section>

    <!--  -->


    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/fontawesome.min.js"></script>
</body>
</html>