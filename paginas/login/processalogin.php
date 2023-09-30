<?php

include_once ('../../conn.php');

if(isset($_POST['id']) || isset($_POST['senha'])){
    if(strlen($_POST['id']) == 0 ){
        echo "Preencha o ID";
    } else if (strlen($_POST['senha']) == 0 ){
        echo "Preencha a senha";
    } else{
        $id_usuario = $conectar->real_escape_string($_POST['id']);
        $senha_usuario = $conectar->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM USUARIOS WHERE ID = '$id_usuario' AND SENHA_USUARIO = '$senha_usuario'";
        $sql_query = $conectar->query($sql_code) or die("Falha na execução!" . $conectar->error); 
 
        $loginsEncontrados = $sql_query->num_rows;//Quantas linhas a consulta retorna
        
        if ($loginsEncontrados == 1){ //Quantidade de linhas obtidas da consulta precisa ser 1

            $dados_usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['NICKNAME'] = $dados_usuario['NICKNAME'];
            header("Location: painel.php");
        }else {
            echo "<script>alert('Usuário sem permissão!');</script>";
            echo '<script>window.history.go(-1);</script>';
        }
    }
}


?>