<?php

//include('serverConnection.php');


// print_r($_POST);


    //Error field variable should if the any field is omitted
    $f_nameErr = $l_nameErr = $emailErr = $passErr = $repassErr = $radioErr = $accountErr = "";

    //passing the users input into the function to validate the users input.
    $firstname = $lastname = $email = $password = $repassword = $selectAccount = $schoolorgan = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //function to trim and remove special character from the input of the users
        function validate_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        
        //validate the if the user input is empty us $_POST

        //validate first name
        if (empty($_POST['firstname'])) {
            $f_nameErr = "Please enter your First Name";
        }else {
            $firstname = validate_input($_POST['firstname']);
        }

        //validate lastname
        if (empty($_POST['lastname'])) {
            $l_nameErr = "Please enter your last Name";
        }else {
            $lastname = validate_input($_POST['lastname']);
        }

        //validate email
        if (empty($_POST['email'])) {
            $emailErr = "Please enter a valid email";
        }else {
            $email = validate_input($_POST['email']);
            //check for email format
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        //validate password
        if(empty($_POST['password']) || strlen($_POST['password']) < 7) {
            $passErr = "Password required atleast 8 Characters";
        }
        else {
            $password = validate_input($_POST['password']);  
        }

        //validate confirm password
        if($_POST['password'] !== $_POST['repassword']) {
            $repassErr = "Password not Matched";
        }
        else {
            $repassword = validate_input($_POST['repassword']);
        }

        //validate radio btn
        if (empty($_POST['radiobtn'])) {
            $$radioErr = "Please select an account";
        }else {
            $selectAccount = validate_input($_POST['radiobtn']);
        }

        //validate account selected
        if (empty($_POST['school_organname'])) {
            $$accountErr = "Please enter a School/Organisation Name";
        }else {
            $schoolorgan = validate_input($_POST['school_organname']);
        }
        
    }














?>