<?php

    $server = "localhost";
    $username = "root";
    $password = "A30OAgbCkWtdXD65";
    $database = "e_voting";

    //mysql://be4fe8c1e62fcd:76e905d8@us-cdbr-iron-east-05.cleardb.net/heroku_4954c0aa8cdc6f3?reconnect=true
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