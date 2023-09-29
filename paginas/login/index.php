<?php
    require_once '../../menu.html';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Tela de Login</title>
</head>
<body>
    <div class="loginarea">
        <form method="POST" action="processalogin.php">
            <div class="inputidarea">
                <img src="/wwc/images/iconid.png" alt="">
                <input type="text" name="id" required><br>
            </div>
            <div class="inputsenhaarea">
                <img src="/wwc/images/iconsenha.png" alt="">
                <input type="password" name="senha" required><br>
            </div>
            
            <div class="btnEntrar">
                <input type="submit" value="Entrar">
            </div>
        </form>


        <div class="btnOutros">
            <a href="#">Esqueci a senha</a>
            <a href="cadastro.php">Criar uma conta</a>
        </div>
    </div>
</body>
</html>
