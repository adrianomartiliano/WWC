<?php

    $db = mysqli_select_db($conectar, 'u836711676_wwc');

    $sql = mysqli_query($conectar, "SELECT * FROM canx1 ORDER BY pontos desc, kills desc, pontoscombate desc") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
    );

    $cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nome"];
        $pontos[] = $aux["pontos"];
        $kills[] = $aux["kills"];
        $pc[] = $aux["pontoscombate"];
        $qtdjogos[] = $aux["qtd_jogos"];
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X1</title>
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
                    <th colspan='3'>#</th><th colspan='3'>NICK</th><th colspan='3'>P</th><th colspan='3'>K</th><th colspan='3'>PC</th><th>J</th>
                </tr>
                    <?php
                   
                        for ($i = 0; $i<count($jogador); $i++)
                        {
                            echo "
                                <tr>
                                <td colspan='3'>". ($i+1) ."</td>
                                <td colspan='3' width='200px'>". $jogador[$i] ."</td>
                                <th colspan='3'>". $pontos[$i]; echo "</th>
                                <th colspan='3'>". $kills[$i]; echo "</th>
                                <th colspan='3'>". $pc[$i]; echo "</th>
                                <th colspan='3'>". $qtdjogos[$i]; echo "</th>
                                </tr>";   
                            $cont++;
                        }

                    ?>
        </table>
    </div>
    
</body>
</html>