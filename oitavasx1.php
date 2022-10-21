<?php
    require_once 'menu.html';

    

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gruposx1.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>Oitavas x1</title>
</head>
<body>
    <?php
        echo "<div class='seta'><a href='rodada3x1.php'><img src='icons/seta-esquerda.ico'></a><a href=''><img src='icons/seta-direita.ico'></a></div>";
        echo "<h1 class='titulo-rodada'>OITAVAS</h1>";
        
        for ($i=1; $i<9; $i++){
            if ($i%2 != 0){
                echo "
            <div class='box-oitavas'>
                <h4>Oitavas ". $i; echo "</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>1º GRUPO ". $i; echo "</th><td> - </td><td>X</td><td> - </td><th> 2º GRUPO ". ($i+1); echo "</th>
                        </tr>
                    </table>
                </div>
            </div>";    
            } else {
                echo "
            <div class='box-oitavas'>
                <h4>Oitavas ". $i; echo "</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>1º GRUPO ". $i; echo "</th><td> - </td><td>X</td><td> - </td><th> 2º GRUPO ". ($i-1); echo "</th>
                        </tr>
                    </table>
                </div>
            </div>";
            }
    
        }
        
    ?>
    
</body>
</html>