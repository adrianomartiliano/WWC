<?php

    $local = 'srv1075.hstgr.io';
    $user = 'u516367395_adriano';
    $senha = 'Dil28Dika7senhadb';
    $banco = 'u516367395_wwc';

    $conectar = new mysqli($local, $user, $senha, $banco);

    if ($conectar->connect_errno){
        echo "Erro ao se conectar com o banco de dados: ".$conectar->connect_error;
    }

?>