<?php 

    session_start();

    if(session_destory()) {

        header("location: login.php");
    }

?>