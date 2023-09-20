<?php

    require_once '../conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneio X1</title>
</head>
<body>

    <div>
        <form action="inserejogador.php"  method="post">
            <input type="text" name='nome'>
            <input type="submit" value="Salvar" name='submit'>
        </form>

    </div>
    
    <?php

        require_once 'canx1.php';

    ?>
</body>
</html>