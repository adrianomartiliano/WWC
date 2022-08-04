<?php

    $local = "localhost";
    $user = "root";
    $senha = "";
    $banco = "wwcI";

    $conectar = new mysqli($local, $user, "", $banco);

    if ($conectar->connect_errno){
        echo "Erro ao se conectar com o banco de dados: ".$conectar->connect_error;
    }

    $conectar->close();
?>