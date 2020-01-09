
<?php

    //require_once('serverConnection.php');


    $f_nameErr = $l_nameErr = $emailErr = $passErr = $repassErr = $radioErr = $accountErr = " ";

    // Processing form data when form is submitted

    if($_SERVER["REQUEST_METHOD"] == "POST") {

           //TRIMMING to remove white spaces from left to right
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);
    $schoolorgan = trim($_POST['school_organname']);
    $select = " ";

    //validating and sanitizing input fields
    $c_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
    $c_lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    $c_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $c_schoolorgan = filter_var($schoolorgan, FILTER_SANITIZE_STRING);
    // $c_organname = filter_var($organname, FILTER_SANITIZE_STRING);

        // Validate first name
        if(empty($c_firstname)) {

            $f_nameErr = "Please enter your First Name";

        }
        else {

            $c_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        }

        // Validate last name
        if(empty($c_lastname)) {

            $l_nameErr = "Please enter your Last Name";

        }
        else {
            
            $c_lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
        }

        // Validate email address
        if(empty($c_email)) {

            $emailErr = "Please enter a valid email address."; 
              
        } else{

            $c_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        //validate password
        if(empty($password) || strlen($password) < 7) {

            $passErr = "Password required atleast 8 Characters";

        }
        else {
            $password = trim($_POST['password']);  
        }

        //validate confirm password
        if($password !== $repassword) {

            $repassErr = "Password not Matched";

        }
        else {

            $repassword = trim($_POST['repassword']);
        }

        // Validate radio button
        if(empty($_POST['radiobtn'])) {

            $radioErr = "Please select an account";   

        }
        else{
            
            $select = $_POST['radiobtn'];     
        }

        // Validate organisation and school name
        if(empty($c_schoolorgan)) {

            $accountErr = "Please enter your School/Organisational Name";
        
        }
        else {

            $c_schoolorgan = filter_var($schoolorgan, FILTER_SANITIZE_STRING);
        }
        
    
    }
    


?>
