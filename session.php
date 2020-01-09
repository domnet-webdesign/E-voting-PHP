<?php

    include('serverConnection.php');

    session_start();

    $email_check = $_SESSION['login_user'];
    $fi_name = $_SESSION['firstname'];

    $_SESSION['title'] = $title;
    $_SESSION['sdate'] = $start_new;
    $_SESSION['edate'] = $end_new;


    $ses_sql = mysqli_query($connection, "SELECT Email FROM e_users WHERE Email = '$email_check'");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['Email'];

    if(isset($_SESSION['login_user'])) {

        header("location: login.php");
        die();
    }


    
    
    
    






?>