<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gruposx1.css">

    <title>Grupos x1</title>
</head>
<body>
<?php
require_once 'conexao.php';
require_once 'menu.html';

$sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY grupo, pontos DESC") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );

    $cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nickname"];
        $pontos[] = $aux["pontos"];
        $pc[] = $aux["pontoscombate"];
        $numerojogadorporgrupo[] = $aux['numerojogadorporgrupo'];
    }
    echo "<div class='seta'><a href='rodada1x1.php'><img src='icons/seta-direita.ico'></a></div>";
    for ($i = 1; $i<9; $i++)
    {
        echo "
        <div class='grupo'>
            <table border='1' class='classificao'>
                <tr>
                    <th colspan='3'>GRUPO ". $i ."</th><th colspan='3'>P</th><th colspan='3'>PC</th>
                </tr>";
                for ($y=0; $y<4; $y++)
                {
                    echo "
                        <tr>
                            <td colspan='3' width='200px'>". $jogador[$cont] ."</td><th colspan='3'>". $pontos[$cont]; echo "</th><th colspan='3'>". $pc[$cont]; echo "</th>
                        </tr>";   
                        $cont++;
                }
        echo "</table>
        </div>
        ";
        
    }
?>
    
</body>
</html>


