<?php

    $local = "localhost";
    $user = "admin";
    $pass = "admin";
    $banco = "LOGIN";

    $mysqli = new mysqli($local, $user, $pass, $banco);

    if ($mysqli->connect_errno){
        
    }
?>