<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['usuario'])){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= fim.php'>";
}


?>