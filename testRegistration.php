
    //INSERTING DATA TO DATABASE TABLE

// $sql = "INSERT INTO e_users (id, First_Name, Last_Name, Email, Password, Re_Password, Account_Type, Sch_Organ_Name) 
// VALUES ('NULL', '$c_firstname', '$c_lastname', '$c_email', '$password', '$repassword', '$select', '$c_schoolorgan')";

// $query = mysqli_query($connection, $sql);

// if(!$query) {

//     echo "Data not been inserted to your database";
// }else {
    <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>

//     echo "Data added";
//     header('location: registrationProcess.php');
// }

$sql = "SELECT Email, Password FROM e_users WHERE Email = '$email_logged' && Password = '$password_logged'";

            if ($stmt = mysqli_prepare($connection, $sql)) {
                
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                //set parameter
                $param_email = $email_logged;

                //attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)) {

                    //Store result
                    mysqli_stmt_store_result($stmt);

                    //check if email exits, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1) {

                        //bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $email_logged, $hashed_password);

                        if(mysqli_stmt_fetch($stmt)) {

                            if(password_verify($password_logged, $hashed_password)) {

                                //password is correct, start a new session
                                session_start();

                                //store data in session variable
                                $_SESSION['loggedin'] = true;

                                $_SESSION['id'] = $id;

                                $_SESSION['email'] = $email_logged;


                                //redirect user to welcome.php page
                                header("location: welcome.php");
                            }else {
                                $pass_Logged_Err = "The entered password is invalid";
                            }
                        }
                    }else {

                        $email_Logged_Err = "No account found with that email";
                    }
                }else {

                    echo "Oops! Something went wrong. please try again";
                }










                

                $sql = "SELECT * FROM e_users WHERE Email ='$email_logged' && password ='$password_logged'";

$query = mysqli_query($connection, $sql);

$rows = mysqli_num_rows($query);

if($rows == 1) {

    $_SESSION['email'] = $email_logged;
    $_SESSION['password'] = $password_logged;

    header("location: welcome.php");
}else {
    
    header('location:registration.php');
}

//close connection
//mysqli_close($connection);

}



//initialize the session
    session_start();


    //check if the user is already logged in, 
    //if yes then redirect the user to the welcome page.

    // if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    //     header("location: welcome.php");
    //     exit;
    // }


    //define variable and initialize
    $email_logged = $password_logged = '';
    $email_Logged_Err = $pass_Logged_Err = '';


    //Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        

        //Checking if the email is empty
        if(empty(trim($_POST['email']))) {

            $email_Logged_Err = "Please enter a valid email";

        }else {

            $email_logged = trim($_POST['email']);
        }

        //checking if the password word is empty 
        //validate password
        if(empty(trim($_POST['password']))) {

            $pass_Logged_Err = "Please enter your Password";
        }
        else {

            $password_logged = trim($_POST['password']);  
        }


        //checking if the no error message
        // if($email_Logged_Err = '' && $pass_Logged_Err = ''){
            //empty($email_Logged_Err) && empty($pass_Logged_Err)
        // }
        //or

        if($email_Logged_Err = '' && $pass_Logged_Err = '') {

            //requiring the server to confirm logged in
            include('serverConnection.php');

            //proceed to checking details in the database table
            $sql = "SELECT * FROM e_users WHERE Email = '$email_logged' && Password = '$password_logged'";
            $result = mysqli_query($connection, $sql);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                echo "invalid user name or password";
            }else {
                echo "logged in";
            }

        }
    }

    
require_once('serverConnection.php');

//setting error variable
$Loggedin_Err = '';

//checking users data on submission
if(isset($_POST['submit'])) {

     if(empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {

         $loggedin_Err = "Email or Password is invalid";

     }else {

         //define email and password
         $email_logged    =  trim($_POST['email']);
         $password_logged =  trim($_POST['password']);

         //server connection
         require_once('serverConnection.php');

         $email_logged = stripslashes($email_logged);
         $password_logged = stripslashes($password_logged);

         $email_logged = mysqli_real_escape_string($connection, $email_logged);
         $password_logged = mysqli_real_escape_string($connection, $password_logged);

         //querying to fetch data
         $sql = "SELECT * FROM e_users WHERE Email = '$email_logged' AND Password = '$password_logged'";

         $query = mysqli_query($connection, $sql);

         $rows = mysqli_num_rows($query);

         if($rows == 1) {

             $_SESSION['email'] = $email_logged;

             header("location: welcome.php");
         }else {

             $loggedin_Err = "Email or Password is invalid";
         }
         mysqli_close($connection);
     }
 }


