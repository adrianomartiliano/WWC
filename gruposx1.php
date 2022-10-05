<link rel="stylesheet" href="css/gruposx1.css">

<?php
    $numeroJogador = 0;
    for ($i = 0; $i<8; $i++)
    {
        echo "
        <div class='grupo";. echo "1'>
            <table border='1' class='classificao'>
                <tr>
                    <th colspan='3'>GRUPO ". $i+1 ."</th><th colspan='3'>P</th><th colspan='3'>PC</th>
                </tr>";

                for ($y=0; $y<4; $y++)
                {
                    $numeroJogador++;
                    echo "
                        <tr>
                            <td colspan='3' width='200px'>Jogador ". $numeroJogador ."</td><th colspan='3'>0</th><th colspan='3'>0</th>
                        </tr>   
                    ";
                }
        echo "       
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
        </div>";
    }
?>

<script src="js/rodada.js"></script>
<script src="../js/controles-fases.js"></script>

<!--
        <table border="1" class="rodadaB rodada-ativa">
            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodadaB();">></div></div></th></tr>
            <tr>
                <th>SONS OF THOR</th><td> 2 </td><th>X</th><td> 0 </td><th>CLAN-DESTINOS</th>
            </tr>
            <tr>
                <th>HUNTERS</th><td> 2 </td><th>X</th><td> 0 </td><th>CLAN-PEOES</th>
            </tr>
        </table>
        <table border="1" class="rodadaB">
            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaB();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodadaB();">></div></div></th></tr>
            <tr>
                <th>CLAN-DESTINOS</th><td> 0 </td><th>X</th><td> 2 </td><th>HUNTERS</th>
            </tr>
            <tr>
                <th>CLAN-PEOES</th><td> 2 </td><th>X</th><td> 1 </td><th>SONS OF THOR</th>
            </tr>
        </table>
        <table border="1" class="rodadaB">
            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaB();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
            <tr>
                <th>HUNTERS</th><td> null </td><th>X</th><td> null </td><th>SONS OF THOR</th>
            </tr>
            <tr>
                <th>CLAN-DESTINOS</th><td> WO </td><th>X</th><td> WO </td><th>CLAN-PEOES</th>
            </tr>
        </table>
</div><!-GRUPO B->

-->