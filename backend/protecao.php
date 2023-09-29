<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['usuario'])){
    echo '<script>window.history.go(-1);</script>';
}


?>