<link rel="stylesheet" href="css/gruposx1.css">

<?php
require_once 'conexao.php';
//selecionando o banco de dados 
$db = mysqli_select_db($conectar, 'u836711676_wwc');

$sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY numerojogador") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );

    $cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nickname"];
    }
    
    for ($i = 0; $i<8; $i++)
    {
        echo "
        <div class='grupo'>
            <table border='1' class='classificao'>
                <tr>
                    <th colspan='3'>GRUPO ". $i+1 ."</th><th colspan='3'>P</th><th colspan='3'>PC</th>
                </tr>";
                for ($y=0; $y<4; $y++)
                {
                    echo "
                        <tr>
                            <td colspan='3' width='200px'>". $jogador[$cont] ."</td><th colspan='3'>0</th><th colspan='3'>0</th>
                        </tr>";   
                        $cont++;
                }
        echo "</table>
        </div>";
        
        /*echo "       
            </table>
            <table border='1' class='<script></script> rodada-ativa'>
                <tr class='tamanho-rodada'><th colspan='6' ><div class='titulo-rodada'><div class='btn-esquerda'><</div>RODADA 1<div class='btn-direita' onclick='NextRodadaB();'>></div></div></th></tr>
                <tr>
                    <th>Jogador ". $numeroJogador-3; echo "</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador-2; echo"</th>
                </tr>
                <tr>
                    <th>Jogador ". $numeroJogador-1; echo"</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador; echo"</th>
                </tr>
            </table>
            <table border='1' class='rodadaB'>
                <tr class='tamanho-rodada'><th colspan='6' ><div class='titulo-rodada'><div class='btn-esquerda'><</div>RODADA 2<div class='btn-direita' onclick='NextRodadaB();'>></div></div></th></tr>
                <tr>
                    <th>Jogador ". $numeroJogador-2; echo"</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador-1; echo"</th>
                </tr>
                <tr>
                    <th>Jogador ". $numeroJogador-3; echo"</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador; echo"</th>
                </tr>
            </table>
            <table border='1' class='rodadaB'>
                <tr class='tamanho-rodada'><th colspan='6' ><div class='titulo-rodada'><div class='btn-esquerda'><</div>RODADA 3<div class='btn-direita' onclick='NextRodadaB();'>></div></div></th></tr>
                <tr>
                    <th>Jogador ". $numeroJogador-1; echo"</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador-3; echo"</th>
                </tr>
                <tr>
                    <th>Jogador ". $numeroJogador; echo"</th><td> - </td><th>X</th><td> - </td><th>Jogador ". $numeroJogador-2; echo"</th>
                </tr>
            </table>
        </div>";*/
    }
?>

<script src="js/rodada.js"></script>
<script src="../js/controles-fases.js"></script>
