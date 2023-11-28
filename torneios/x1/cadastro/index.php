<?php 

    require_once '../../../conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <?php 
        require "menu.html";
    ?>

    <form action="salvando.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname" required>
        <label for="clan">Clan:</label>
        <input type="text" id="clan" name="clan" required>
        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>