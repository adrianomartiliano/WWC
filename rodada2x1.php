<link rel="stylesheet" href="css/gruposx1.css">
<title>Rodada 2</title>

<?php
require_once 'menu.html';
require_once 'conexao.php';

$db = mysqli_select_db($conectar, 'u836711676_wwc');

$sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY numerojogador") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
);
$jogador = array();
while($aux = mysqli_fetch_assoc($sql)) {  
    $jogador[] = $aux["nickname"];
}


echo "<div class='seta'><a href='rodada1x1.php'><img src='icons/seta-esquerda.ico'></a><a href='rodada3x1.php'><img src='icons/seta-direita.ico'></a></div>";
$ajud = 0;
for ($cont=1; $cont<9; $cont++)
{

    echo "       
        </table>
        <table border='1' class='rodada'>
            <tr class='tamanho-rodada'><th colspan='6' ><div class='titulo-rodada'>GRUPO ". $cont; echo "</div></th></tr>
            <tr>
                <th>". $jogador[$ajud]; echo "</th><td> - </td><th>X</th><td> - </td><th>". $jogador[$ajud+2]; echo"</th>
            </tr>
            <tr>
                <th>". $jogador[$ajud+1]; echo"</th><td> - </td><th>X</th><td> - </td><th>". $jogador[$ajud+3]; echo"</th>
            </tr>
        </table>";
        $ajud += 4;
}
?>