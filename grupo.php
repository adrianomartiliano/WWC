<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWC - GRUPOS</title>
    <style>
        th{
            padding: 5px;
        }
        td{
            padding: 5px;
        }
        .grupo{
            display: flex;
            width: 800px;
            margin: 20px auto;
            justify-content: space-between;   
            border: 1px solid gray;
            border-radius: 5px;
            box-shadow: 0 0 10px gray;
        }
        table{
            border: 10px;
        }
        .rodada{
            width: 450px;
            display: none;
        }
        @media (max-width:600px){
            .grupo{
                padding: 5px;
                display: block;
                width: 90%;
            }
            .classificao{
                width: 90%;
                margin: 10px auto;
            }
            .rodada{
                margin: 20px auto;
                width: 90%;
            }
        }
        .btn-direita, .btn-esquerda{
            cursor: pointer;
        }
        .rodada-ativa {
            display: block;
        }
        .titulo-rodada{
            justify-content: space-between;
            display: flex;
        }

    </style>
</head>
<body>
    <?php
        require_once 'menu.html';
    ?>
    <div class="conteudo">

        
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO A</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3">PRO GAMING</td><th colspan="3">3</th><th colspan="3">1.137</th>
                </tr>
                <tr>
                    <td colspan="3" >HEROES DE LA PATRIA</td><th colspan="3">3</th><th colspan="3">890</th>
                </tr>
                <tr>
                    <td colspan="3">UNITED</td><th colspan="3">0</th><th colspan="3">555</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">TERRORISTAS DELTA</td><th colspan="3">0</th><th colspan="3">547</th>
                </tr>
                        
                </table>
                </table>
                <table border="1" class="rodada rodada-ativa" id="rodada1">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodada('rodada1');">></div></div></th></tr>
                    <tr>
                        <th>PRO GAMING</th><td> 2 </td><th>X</th><td> 0 </td><th>UNITED</th>
                    </tr>
                    <tr>
                        <th>TERRORISTAS DELTA</th><td> 0 </td><th>X</th><td> 2 </td><th>HEROES DE LA PATRIA</th>
                    </tr>
                </table>
                <table border="1" class="rodada">
                <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodada();">></div></div></th></tr>
                    <tr>
                        <th>UNITED</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                    <tr>
                        <th>HEROES DE LA PATRIA</th><td> - </td><th>X</th><td> - </td><th>PRO GAMING</th>
                    </tr>
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                    <tr>
                        <th>HEROES DE LA PATRIA</th><td> - </td><th>X</th><td> - </td><th>UNITED</th>
                    </tr>
                    <tr>
                        <th>PRO GAMING</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                </table>
        </div><!--Grupo A-->
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO B</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">HUNTERS</td><th colspan="3">3</th><th colspan="3">936</th>
                </tr>
                <tr>
                    <td colspan="3">SONS OF THOR</td><th colspan="3">3</th><th colspan="3">861</th>
                </tr>
                <tr>
                    <td colspan="3" >CLAN-PEOES</td><th colspan="3">0</th><th colspan="3">733</th>
                </tr>
                <tr>
                    <td colspan="3">CLAN-DESTINOS</td><th colspan="3">0</th><th colspan="3">538</th>
                </tr>        
                </table>
                <table border="1" class="rodada rodada-ativa">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodada();">></div></div></th></tr>
                    <tr>
                        <th>SONS OF THOR</th><td> 2 </td><th>X</th><td> 0 </td><th>CLAN-DESTINOS</th>
                    </tr>
                    <tr>
                        <th>HUNTERS</th><td> 2 </td><th>X</th><td> 0 </td><th>CLAN-PEOES</th>
                    </tr>
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodada();">></div></div></th></tr>
                    <tr>
                        <th>UNITED</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                    <tr>
                        <th>HEROES DE LA PATRIA</th><td> - </td><th>X</th><td> - </td><th>PRO GAMING</th>
                    </tr>
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                    <tr>
                        <th>HEROES DE LA PATRIA</th><td> - </td><th>X</th><td> - </td><th>UNITED</th>
                    </tr>
                    <tr>
                        <th>PRO GAMING</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                </table>
        </div><!--GRUPO B-->
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO C</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3">Z SPECIAL UNITED</td><th colspan="3">3</th><th colspan="3">1.294</th>
                </tr>
                <tr>
                    <td colspan="3" >SWAT BRASIL PRO</td><th colspan="3">3</th><th colspan="3">466</th>
                </tr>
                <tr>
                    <td colspan="3">LOS VERDUGOS</td><th colspan="3">0</th><th colspan="3">473</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">LOS GEDES</td><th colspan="3">0</th><th colspan="3">261</th>
                </tr>
                   
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" >RODADA 1</th></tr>
                    <tr>
                        <th>SWAT BRASIL PRO</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS GEDES</th>
                    </tr>
                    <tr>
                        <th>Z SPECIAL UNITED</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS VERDUGOS</th>
                    </tr>
                </table>
        </div>
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO D</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3" >KAMIKAZES</td><th colspan="3">3</th><th colspan="3">1.195</th>
                </tr>
                <tr>
                    <td colspan="3">VETERANOS DE GUERRA</td><th colspan="3">3</th><th colspan="3">725</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">DEATH SQUAD</td><th colspan="3">0</th><th colspan="3">753</th>
                </tr>
                <tr>
                    <td colspan="3">PANDILLEROS</td><th colspan="3">0</th><th colspan="3">521</th>
                </tr>        
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" >RODADA 1</th></tr>
                    <tr>
                        <th>VETERANOS DE GUERRA</th><td> 2 </td><th>X</th><td> 0 </td><th>PANDILLEROS</th>
                    </tr>
                    <tr>
                        <th>DEATH SQUAD</th><td> 0 </td><th>X</th><td> 2 </td><th>KAMIKAZES</th>
                    </tr>
                </table>
        </div><!--GRUPO D-->
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO E</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">GLORIOSOS PATRIOTAS</td><th colspan="3">3</th><th colspan="3">1.365</th>
                </tr>
                <tr>
                    <td colspan="3">CANNABIS</td><th colspan="3">3</th><th colspan="3">1.306</th>
                </tr>
                <tr>
                    <td colspan="3">LOS 4 FANTÁSTICOS</td><th colspan="3">0</th><th colspan="3">692</th>
                </tr>
                <tr>
                    <td colspan="3" >BESTIAS DE ASALTO</td><th colspan="3">0</th><th colspan="3">588</th>
                </tr>        
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" >RODADA 1</th></tr>
                    <tr>
                        <th>BESTIAS DE ASALTO</th><td> 0 </td><th>X</th><td> 2 </td><th>CANNABIS</th>
                    </tr>
                    <tr>
                        <th>LOS 4 FANTÁSTICOS</th><td> 0 </td><th>X</th><td> 2 </td><th>GLORIOSOS PATRIOTAS</th>
                    </tr>
                </table>
        </div><!--GRUPO E-->
        <div class="grupo">
            <table border="1" class="classificao">
                <tr>
                    <th colspan="3">GRUPO F</th><th colspan="3">P</th><th colspan="3">PC</th>
                </tr>
                <tr>
                    <td colspan="3">BLACK ORDERS</td><th colspan="3">3</th><th colspan="3">837</th>
                </tr>
                <tr>
                    <td colspan="3">JAGUNÇOS</td><th colspan="3">3</th><th colspan="3">787</th>
                </tr>
                <tr>
                    <td colspan="3" width="200px">THE KILL TEAM</td><th colspan="3">0</th><th colspan="3">792</th>
                </tr>
                <tr>
                    <td colspan="3" >DEPREDADORES</td><th colspan="3">0</th><th colspan="3">285</th>
                </tr> 
                
                       
                </table>
                <table border="1" class="rodada">
                    <tr><th colspan="6" >RODADA 1</th></tr>
                    <tr>
                        <th>JAGUNÇOS</th><td> 2 </td><th>X</th><td> 0 </td><th>DEPREDADORES</th>
                    </tr>
                    <tr>
                        <th>THE KILL TEAM</th><td> 1 </td><th>X</th><td> 2 </td><th>BLACK ORDERS</th>
                    </tr>
                </table>
        </div><!--GRUPO F-->
        
    </div>
    <script src="js/rodada.js">
    </script>
</body>
</html>