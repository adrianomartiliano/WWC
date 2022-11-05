<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gruposx1.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>FINAL x1</title>
</head>
<body>

<?php

require_once 'menu.html';

echo "<div class='seta'><a href='semix1.php'><img src='icons/seta-esquerda.ico'></a><a href=''><img src='icons/seta-direita.ico'></a></div>";
        echo "<h1 class='titulo-rodada'>FINAL</h1>";
        echo "
            <div class='box-oitavas'>
                <h4>FINAL</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>VENCEDOR SEMI 1</th><td> - </td><td>X</td><td> - </td><th>VENCEDOR SEMI 2</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>TERCEIRO LUGAR</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>PERDEDOR SEMI 1</th><td> - </td><td>X</td><td> - </td><th>PERDEDOR SEMI 2</th>
                        </tr>
                    </table>
                </div>
            </div>";

?>

</body>
</html>