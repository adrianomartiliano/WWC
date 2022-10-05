<?php
    for ($i = 0; $i<6; $i++)
    {
        echo "
        <div class='grupo'>
            <table border='1' class='classificao'>
                <tr>
                    <th colspan='3'>GRUPO ". $i+1 ."</th><th colspan='3'>P</th><th colspan='3'>PC</th>
                </tr>
                <tr>
                    <td colspan='3' width='200px'>HUNTERS</td><th colspan='3'>7</th><th colspan='3'>1.694</th>
                </tr>
                <tr>
                    <td colspan='3' >CLAN-PEOES</td><th colspan='3'>6</th><th colspan='3'>1.838</th>
                </tr>
                <tr>
                    <td colspan='3'><strike>SONS OF THOR</strike></td><th colspan='3'>4</th><th colspan='3'>1.896</th>
                </tr>
                <tr>
                    <td colspan='3'>CLAN-DESTINOS</td><th colspan='3'>0</th><th colspan='3'>1.108</th>
                </tr>       
            </table>
        </div>";
    }
?>

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