<?php

    include "menu.html";
    include "protecao.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?></h1>
    <a href="logout.php">SAIR</a>
</body>
</html>