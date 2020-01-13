<?php


require_once('serverConnection.php');


$emailConfirm = '';
$emailConfirmErr = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $emailConfirm = trim($_POST['email']);

        //validate email
        if (!empty($emailConfirm)) {

            $sqlre = "INSERT INTO emailconfirm (id, email) VALUES ('NULL', '$emailConfirm')";
            $query = mysqli_query($connection, $sqlre);

            if($query) {

                header('location: congratulations.php');

            }else {
                $emailConfirmErr = "Please enter a valid email";
            }

            // mysqli_close($connection);

        }else {
            echo "<script> alert('Email not added to the voting system.') </script>";
            
                die();
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
    <!-- Modal -->
    <div class="container">
        <div class="card-header mt-5 text-center">
            <h2 class="card-title display-4 font-weight-bold">SIGN YOUR BALLOT</h2>
        </div>
        <div class="card-body p-5">
            <p class="text-center display-5"><strong>
                EMAIL: NOTIFICATION OF BALLOT CONFIRMATION</strong>
            </p>
                <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Email Address</strong></label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="fn76"> <?php echo $emailConfirmErr; ?> </span>
                    </div>
                
                <ul class="list-group mb-3 mt-4">
                    <li class="list-group-item">Enter a valid Email address to Confirmation your Ballot</li>
                    <li class="list-group-item">Your ballot will be unsucessfull without a valid Email</li>
                </ul>
        </div>
        <!-- <div class="card-footer text-center"> -->
            <a type="button" href="vote.php" class="btn btn-secondary p-2">DISCARD BALLOT</a>
            <button type="submit" name="submit" onclick="voteCounter();" id="candidate1" class="btn btn-primary p-2">SUBMIT BALLOT</button>
        <!-- </div> -->
            </form>
    </div>

    





    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>

</body>
</html>


