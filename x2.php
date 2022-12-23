<?php
    require_once 'menu.html';
    require_once 'conexao.php';

    $db = mysqli_select_db($conectar, 'u836711676_wwc');

    $sql = mysqli_query($conectar, "SELECT * FROM classificacaox2 ORDER BY pontos desc, kills desc, pontoscombate desc") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
    );

    $cont = 0;
    $dupla = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $dupla[] = $aux["dupla"];
        $pontos[] = $aux["pontos"];
        $kills[] = $aux["kills"];
        $pc[] = $aux["pontoscombate"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X2</title>
    <style>
        td, th{
            padding: 5px;
        }
        table{
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div class='grupo'>
        <table border='1' class='classificao'>
                <tr>
                    <th colspan='3'>#</th><th colspan='3'>DUPLA</th><th colspan='3'>P</th><th colspan='3'>K</th><th colspan='3'>PC</th>
                </tr>
                    <?php
                        for ($i = 0; $i<count($dupla); $i++)
                        {
                            echo "
                                <tr>
                                <td colspan='3'>". $i+1 ."</td><td colspan='3' width='200px'>". $dupla[$i] ."</td><th colspan='3'>". $pontos[$i]; echo "</th><th colspan='3'>". $kills[$i]; echo "</th><th colspan='3'>". $pc[$i]; echo "</th>
                                </tr>";   
                            $cont++;
                        }

                    ?>
        </table>
    </div>
    
</body>
</html>