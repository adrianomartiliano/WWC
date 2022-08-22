<?php

    $local = "localhost";
    $user = "admin";
    $senha = "admin";
    $banco = "WWC1";

    $conectar = new mysqli($local, $user, $senha, $banco);

    if ($conectar->connect_errno){
        echo "Erro ao se conectar com o banco de dados: ".$conectar->connect_error;
    } else{
        echo "Sucesso!!";
    }

    $conectar->close();
?>