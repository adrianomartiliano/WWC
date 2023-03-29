<?php

    $local = 'sql541.main-hosting.eu';
    $user = 'u836711676_goku';
    $senha = 'Dil28Dika7';
    $banco = 'u836711676_wwc';
    
    $conectar = new mysqli($local, $user, $senha, $banco);

    if ($conectar->connect_errno){
        echo "Erro ao se conectar com o banco de dados: ".$conectar->connect_error;
    }

?>