<?php

    include("serverConnection.php");

    //starting session
    session_start();

    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //GET email and password sent from form
        $myemail    =      mysqli_real_escape_string($connection, $_POST['email']);
        $mypassword =      mysqli_real_escape_string($connection, $_POST['password']);

        $sql = "SELECT id FROM e_users WHERE Email = '$myemail' AND Password = '$mypassword'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //$active = $row['active'];
        $count = mysqli_num_rows($result);

        //if result matched $myemail and $mypassword, the table row must be 1 row

        if($count == 1) {

            //$session_register("myemail");
            $_SESSION['login_user'] = $myemail;

            //header("location: welcome.php");
            header("location: dashboard.php");
            
        }else {

            $error = "Your Login Email or Password is invalid";
            // echo "Your Login Email or Password is invalid";
            
        }

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
    <section id="registration text-center">
        <div class="regitration-header">
            <h1 class="display-4 text-center">E-VOTING & POLLING</h1>
        </div>

        <!-- registration forms -->
        <div class="container mt-5 fn7">
            <form method="POST" action=" <?php echo $_SERVER["PHP_SELF"]; ?> ">
                <div class="form-group">
                    <label for="email">Email <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input class="form-control" id="email" name="email" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="form-control" id="password" name="password" type="password">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $error; ?> </span>
                </div>

                <input type="submit" class="btn btn-primary" value="LOGIN">

                <div class="terms text-center mt-3">
                    <p>Signing up signifies you've read and agree to our <br> 
                        <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </p>
                </div>

                <div class="alt-login text-center">
                <p>New User? <a href="registration.php">Sign up</a></p>
            </div>
            </form>
        </div>
    </section>

<script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
    <script src="main.js"></script>
</body>
</html>