<?php
require_once '../menu.html';
require_once '../conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoluçã CAN</title>
    <style>
        form{
            margin: 20px;
            text-align: center;
        }
        .nickname{
            margin: 10px;
        }
        .linha{
            display: flex;
            justify-content: center;
            margin: 10px;
        }
        .linha > input {
            width: 100px;
            padding: 5px;
        }
        #btn-enviar{ 
            margin: 20px;
            padding: 10px;
            background-color: 
        }
    </style>
</head>
<body>

<form action="salvaevolucao.php" method="post">
    <?php
        $i = 0;
        while ($i<10){
            echo "
                <div class='linha'>
                    <p class='nickname'>GOKU</p>
                    <input type='text'>
                </div>";
            $i++;
        }
        
    ?>
    

    <input type="submit" value='Enviar' id='btn-enviar'>
</form>
    
</body>
</html>