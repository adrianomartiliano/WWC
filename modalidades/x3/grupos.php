
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grupos.css">
    
    <title>Document</title>
</head>
<body>

<?php 
require_once '../../conexao.php';

$sql = mysqli_query($conectar, "SELECT * FROM X3 ORDER BY grupo, pontos DESC, kills DESC, pontoscombate DESC");
$cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $equipe[] = $aux["nome"];
        $pontos[] = $aux["pontos"];
        $pc[] = $aux["pontoscombate"];
        $kills[] = $aux['kills'];
    }

for ($i = 1; $i<5; $i++)
    {
        echo "
        <div class='grupo'>
            <table>
                <tr class='cabecalho'>
                    <th>#</th><th colspan='3'>GRUPO ". $i ."</th><th colspan='3'>P</th><th colspan='3'>K</th><th colspan='3'>PC</th>
                </tr>";
                for ($y=1; $y<5; $y++)
                {
                    echo "
                        <tr>
                            <td class='posicao'>". $y ."</td>
                            <td class='jogador' colspan='3' width='200px'>". $equipe[$cont] ."</td>
                            <th class='pontos' colspan='3'>". $pontos[$cont]; echo "</th>
                            <th class='pontos' colspan='3'>". $kills[$cont]; echo "</th>
                            <th class='pc' colspan='3'>". $pc[$cont]; echo "</th>
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
