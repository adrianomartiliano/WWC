<?php

    require '../../menu.html';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X3</title>
    <style>
        .controledefase{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="controledefase">
        <a href="rodada1/"><img src="../../icons/seta-direita.ico" alt=""></a>
    </div>
    <?php 
        require_once 'grupos.php';
    ?>
    
</body>
</html>