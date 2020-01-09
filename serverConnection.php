<?php

    $server = "localhost";
    $username = "root";
    $password = "A30OAgbCkWtdXD65";
    $database = "e_voting";

    //$connection = mysqli_connect($server, $username, $password, $database);

    try {
     
        $connection = mysqli_connect($server, $username, $password, $database);

        if($connection) {

            //echo "Your Connection was successful";
        }
    }
    catch(Exception $errormsg) {
        echo $errormsg->getMessage();
    }


?>