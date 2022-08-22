<?php

    include('menu.html');

    include('conexao-login.php');

    if(isset($_POST['usuario']) || isset($_POST['senha'])){
        if(strlen($_POST['usuario']) == 0 ){
            echo "Preencha o usuário";
        } else if (strlen($_POST['senha']) == 0 ){
            echo "Preencha a senha";
        } else{
            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução!" . $mysqli->error);
            

            $quantidade_linhas = $sql_query->num_rows;//Quantas linhas a consulta retorna

            if ($quantidade_linhas == 1){
                $dados_usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['usuario'] = $dados_usuario['usuario'];

                header("Location: painel.php");
            }else {
                echo "Usuário sem permissão!!";
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            
        }
        #caixa-login{
            width: 250px;
            height: 250px;
            background-color: #ffab07;
            display: flex;
            margin: 50px auto;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 15px gray;
            border: 1px solid gray;
            align-items: center;
            justify-content: space-between;
        }
        .input_login{
            width: 80%;
            padding: 5px;
            margin: 10px auto;
        }
        .titulo_input{
            width: 100%;
            color: #E0453D;
        }
        .btn_login{
            padding: 5px;
            width: 80%;
            background-color: #215D94;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="caixa-login">
        <form action="" method="POST" >
            <label class="titulo_input" for="usuario">USUÁRIO: </label>
            <input class="input_login" type="text" name="usuario">
            <label class="titulo_input" for="senha">SENHA: </label>
            <input class="input_login" type="password" name="senha">
            <button class="btn_login" type="submit">ENTRAR</button>
        </form>
    </div>
    
    
</body>
</html>