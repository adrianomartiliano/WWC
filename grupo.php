<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWC - GRUPOS</title>
    <style>
        .fases{
            width: 90%;
            max-width: 900px;
            margin: 0 auto;
            
        }
        .controles-fase{
            justify-content: space-between;
            display: flex;
            width: 90%;
            max-width: 700px;
            margin: 0 auto;
        }
        .controles-fase > p{
            cursor: pointer;
        }

        th{
            padding: 5px;
        }
        td{
            padding: 5px;
        }
        .tamanho-rodada th{
            width: 450px;
        }
        .grupo{
            display: flex;
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            justify-content: space-between;   
            border: 1px solid gray;
            border-radius: 5px;
            box-shadow: 0 0 10px gray;
            padding: 5px;
        }
        table{
            border: 50px;
        }
        .rodadaA, .rodadaB, .rodadaC, .rodadaD, .rodadaE, .rodadaF{
            display: none;
        }
        @media (max-width:600px){
            .fases{width: 95%;}
            .grupo{
                padding: 5px;
                display: block;
                width: 90%;
            }
            .classificao{
                width: 90%;
                margin: 10px auto;
            }
            th{
            padding: 5px;
            }
            td{
            padding: 5px;
            }
            .rodada-ativa{
                width: 90%;
                margin: 10px auto;
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
            padding: 5px;
        }
        .fases > div{
            display: none;
        }
        .fase-ativa{
            display: block !important;
        }
    </style>
</head>
<body>
    <?php
        require_once 'menu.html';
    ?>
    <div class="conteudo">

        <div class="controles-fase">
            <p id="voltar-fase"><img onclick="voltaFase();" src="icons/seta-esquerda.ico" alt=""></p><h1>ETAPAS</h1><p id="avanca-fase"><img onclick="avancaFase();" src="icons/seta-direita.ico" alt=""></p>
        </div>
        <div class="fases">
            <div class="fase-grupo">
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO A</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                            <td colspan="3">PRO GAMING</td><th colspan="3">9</th><th colspan="3">3.138</th>
                        </tr>
                        <tr>
                            <td colspan="3" >HEROES DE LA PATRIA</td><th colspan="3">6</th><th colspan="3">2.506</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px">TERRORISTAS DELTA</td><th colspan="3">3</th><th colspan="3">2.035</th>
                        </tr>
                        <tr>
                            <td colspan="3">UNITED</td><th colspan="3">0</th><th colspan="3">1.719</th>
                        </tr>
                        
                                
                    </table><!--Classificao-->
                        <table border="1" class="rodadaA rodada-ativa" id="rodada1">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodada('rodada1');">></div></div></th></tr>
                            <tr>
                                <th>PRO GAMING</th><td> 2 </td><th>X</th><td> 0 </td><th>UNITED</th>
                            </tr>
                            <tr>
                                <th>TERRORISTAS DELTA</th><td> 0 </td><th>X</th><td> 2 </td><th>HEROES DE LA PATRIA</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaA">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodada();">></div></div></th></tr>
                            <tr>
                                <th>UNITED</th><td> 1 </td><th>X</th><td> 2 </td><th>TERRORISTAS DELTA</th>
                            </tr>
                            <tr>
                                <th>HEROES DE LA PATRIA</th><td> 0 </td><th>X</th><td> 2 </td><th>PRO GAMING</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaA">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodada();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                            <tr>
                                <th>HEROES DE LA PATRIA</th><td> 2 </td><th>X</th><td> 0 </td><th>UNITED</th>
                            </tr>
                            <tr>
                                <th>PRO GAMING</th><td> 2 </td><th>X</th><td> 0 </td><th>TERRORISTAS DELTA</th>
                            </tr>
                        </table>
                </div><!--Grupo A-->
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO B</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px">HUNTERS</td><th colspan="3">7</th><th colspan="3">1.694</th>
                        </tr>
                        <tr>
                            <td colspan="3" >CLAN-PEOES</td><th colspan="3">6</th><th colspan="3">1.838</th>
                        </tr>
                        <tr>
                            <td colspan="3"><strike>SONS OF THOR</strike></td><th colspan="3">4</th><th colspan="3">1.896</th>
                        </tr>
                        <tr>
                            <td colspan="3">CLAN-DESTINOS</td><th colspan="3">0</th><th colspan="3">1.108</th>
                        </tr>        
                    </table>
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
                </div><!--GRUPO B-->
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO C</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                            <td colspan="3">Z SPECIAL UNITED</td><th colspan="3">9</th><th colspan="3">2.394</th>
                        </tr>
                        <tr>
                            <td colspan="3" >SWAT BRASIL PRO</td><th colspan="3">6</th><th colspan="3">1.231</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px">LOS GEDES</td><th colspan="3">3</th><th colspan="3">1.507</th>
                        </tr>
                        <tr>
                            <td colspan="3">LOS VERDUGOS</td><th colspan="3">0</th><th colspan="3">1.447</th>
                        </tr>
                         
                    </table>
                        
                        
                        <table border="1" class="rodadaC rodada-ativa">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodadaC();">></div></div></th></tr>
                            <tr>
                                <th>SWAT BRASIL PRO</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS GEDES</th>
                            </tr>
                            <tr>
                                <th>Z SPECIAL UNITED</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS VERDUGOS</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaC">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaC();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodadaC();">></div></div></th></tr>
                            <tr>
                                <th>LOS VERDUGOS</th><td> 1 </td><th>X</th><td> 2 </td><th>SWAT BRASIL PRO</th>
                            </tr>
                            <tr>
                                <th>LOS GEDES</th><td> 0 </td><th>X</th><td> 2 </td><th>Z SPECIAL UNITED</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaC">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaC();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                            <tr>
                                <th>Z SPECIAL UNITED</th><td> 2 </td><th>X</th><td> 0 </td><th>SWAT BRASIL PRO</th>
                            </tr>
                            <tr>
                                <th>LOS GEDES</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS VERDUGOS</th>
                            </tr>
                        </table>
                </div><!--GRUPO C-->
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO D</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                            <td colspan="3" >KAMIKAZES</td><th colspan="3">9</th><th colspan="3">2.316</th>
                        </tr>
                        <tr>
                            <td colspan="3">VETERANOS DE GUERRA</td><th colspan="3">6</th><th colspan="3">1.662</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px">DEATH SQUAD</td><th colspan="3">3</th><th colspan="3">2.377</th>
                        </tr>
                        <tr>
                            <td colspan="3">PANDILLEROS</td><th colspan="3">0</th><th colspan="3">2.252</th>
                        </tr>        
                        </table>
                        
                        <table border="1" class="rodadaD rodada-ativa">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodadaD();">></div></div></th></tr>
                            <tr>
                                <th>VETERANOS DE GUERRA</th><td> 2 </td><th>X</th><td> 0 </td><th>PANDILLEROS</th>
                            </tr>
                            <tr>
                                <th>DEATH SQUAD</th><td> 0 </td><th>X</th><td> 2 </td><th>KAMIKAZES</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaD">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaD();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodadaD();">></div></div></th></tr>
                            <tr>
                                <th>KAMIKAZES</th><td> 2 </td><th>X</th><td> 0 </td><th>PANDILLEROS</th>
                            </tr>
                            <tr>
                                <th>VETERANOS DE GUERRA</th><td> 2 </td><th>X</th><td> 0 </td><th>DEATH SQUAD</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaD">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaD();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                            <tr>
                                <th>PANDILLEROS</th><td> 1 </td><th>X</th><td> 2 </td><th>DEATH SQUAD</th>
                            </tr>
                            <tr>
                                <th>KAMIKAZES</th><td> WO </td><th>X</th><td> WO </td><th>VETERANOS DE GUERRA</th>
                            </tr>
                        </table>
                </div><!--GRUPO D-->
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO E</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                        <td colspan="3">CANNABIS</td><th colspan="3">9</th><th colspan="3">4.573</th>
                    </tr>
                    <tr>
                        <td colspan="3" >BESTIAS DE ASALTO</td><th colspan="3">6</th><th colspan="3">2.610</th>
                    </tr>
                    <tr>
                        <td colspan="3" width="200px">GLORIOSOS PATRIOTAS</td><th colspan="3">3</th><th colspan="3">2.740</th>
                    </tr>
                    
                    <tr>
                        <td colspan="3">LOS 4 FANTÁSTICOS</td><th colspan="3">0</th><th colspan="3">2.050</th>
                    </tr>   
                                
                    </table>
                        

                        <table border="1" class="rodadaE rodada-ativa">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodadaE();">></div></div></th></tr>
                            <tr>
                                <th>BESTIAS DE ASALTO</th><td> 0 </td><th>X</th><td> 2 </td><th>CANNABIS</th>
                            </tr>
                            <tr>
                                <th>LOS 4 FANTÁSTICOS</th><td> 0 </td><th>X</th><td> 2 </td><th>GLORIOSOS PATRIOTAS</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaE">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaE();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodadaE();">></div></div></th></tr>
                            <tr>
                                <th>CANNABIS</th><td> 2 </td><th>X</th><td> 0 </td><th>GLORIOSOS PATRIOTAS</th>
                            </tr>
                            <tr>
                                <th>BESTIAS DE ASALTO</th><td> 2 </td><th>X</th><td> 0 </td><th>LOS 4 FANTÁSTICOS</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaE">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaE();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                            <tr>
                                <th>GLORIOSOS PATRIOTAS</th><td> 0 </td><th>X</th><td> 2 </td><th>BESTIAS DE ASALTO</th>
                            </tr>
                            <tr>
                                <th>LOS 4 FANTÁSTICOS</th><td> 0 </td><th>X</th><td> 2 </td><th>CANNABIS</th>
                            </tr>
                        </table>
                </div><!--GRUPO E-->
                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">GRUPO F</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        <tr>
                        <td colspan="3" width="200px">THE KILL TEAM</td><th colspan="3">6</th><th colspan="3">2.432</th>
                    </tr>
                    <tr>
                        <td colspan="3">JAGUNÇOS</td><th colspan="3">6</th><th colspan="3">2.226</th>
                    </tr>
                    <tr>
                        <td colspan="3"><strike>BLACK ORDERS</strike></td><th colspan="3">4</th><th colspan="3">2.014</th>
                    </tr>
                    <tr>
                        <td colspan="3" >DEPREDADORES</td><th colspan="3">1</th><th colspan="3">736</th>
                    </tr> 
                        
                            
                        </table>

                        <table border="1" class="rodadaF rodada-ativa">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodadaF();">></div></div></th></tr>
                            <tr>
                                <th>JAGUNÇOS</th><td> 2 </td><th>X</th><td> 0 </td><th>DEPREDADORES</th>
                            </tr>
                            <tr>
                                <th>THE KILL TEAM</th><td> 1 </td><th>X</th><td> 2 </td><th>BLACK ORDERS</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaF">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaF();"><</div>RODADA 2<div class="btn-direita" onclick="NextRodadaF();">></div></div></th></tr>
                            <tr>
                                <th>DEPREDADORES</th><td> 0 </td><th>X</th><td> 2 </td><th>THE KILL TEAM</th>
                            </tr>
                            <tr>
                                <th>JAGUNÇOS</th><td> null </td><th>X</th><td> null </td><th>BLACK ORDERS</th>
                            </tr>
                        </table>
                        <table border="1" class="rodadaF">
                            <tr class="tamanho-rodada"><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda" onclick="backRodadaF();"><</div>RODADA 3<div class="btn-direita">></div></div></th></tr>
                            <tr>
                                <th>THE KILL TEAM</th><td> 2 </td><th>X</th><td> 0 </td><th>JAGUNÇOS</th>
                            </tr>
                            <tr>
                                <th>BLACK ORDERS</th><td> null </td><th>X</th><td> null </td><th>DEPREDADORES</th>
                            </tr>
                        </table>
                </div><!--GRUPO F-->

                <div class="grupo">
                    <table border="1" class="classificao">
                        <tr>
                            <th colspan="3">SEGUNDA CHANCE</th><th colspan="3">P</th><th colspan="3">PC</th>
                        </tr>
                        
                        <tr>
                            <td colspan="3" width="200px" style="color:green">GLORIOSOS PATRIOTAS</td><th colspan="3">3</th><th colspan="3">2.740</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px" style="color:green">DEATH SQUAD</td><th colspan="3">3</th><th colspan="3">2.377</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px" style="color:green">TERRORISTAS DELTA</td><th colspan="3">3</th><th colspan="3">2.035</th>
                        </tr>
                        <tr>
                            <td colspan="3" width="200px" style="color:green">LOS GEDES</td><th colspan="3">3</th><th colspan="3">1.507</th>
                        </tr>
                        <tr>
                            <td colspan="3" >DEPREDADORES</td><th colspan="3">1</th><th colspan="3">736</th>
                        </tr>
                        <tr>
                            <td colspan="3" >LOS VERDUGOS</td><th colspan="3">0</th><th colspan="3">1.447</th>
                        </tr>
                        <tr>
                            <td colspan="3">PANDILLEROS</td><th colspan="3">0</th><th colspan="3">2.252</th>
                        </tr>
                        <tr>
                            <td colspan="3">LOS 4 FANTÁSTICOS</td><th colspan="3">0</th><th colspan="3">2.050</th>
                        </tr> 
                        <tr>
                            <td colspan="3">UNITED</td><th colspan="3">0</th><th colspan="3">1.719</th>
                        </tr>
                        <tr>
                            <td colspan="3">CLAN-DESTINOS</td><th colspan="3">0</th><th colspan="3">1.108</th>
                        </tr>
                        <tr>
                            <td colspan="3"><strike>BLACK ORDERS</strike></td><th colspan="3">4</th><th colspan="3">2.014</th>
                        </tr> 
                        <tr>
                            <td colspan="3"><strike>SONS OF THOR</strike></td><th colspan="3">4</th><th colspan="3">1.896</th>
                        </tr>
                        
                        
                        
                            
                    </table>
                </div><!--GRUPO DOS TERCEIROS-->
            </div>
            <style>
                .box-oitavas{
                    border: 1px solid gray;
                    border-radius: 4px;
                    box-shadow: 0 0 10px gray;
                    margin: 20px auto;
                    text-align: center;
                    max-width: 600px;
                    padding: 10px;
                }
                .box-oitavas th {width: 250px;}
                .box-oitavas h4{
                    color: gray;
                    opacity: 0.7;
                }
                .box-confrontos-oitavas{
                    display: flex;
                    justify-content: space-between;
                }
            </style>
            <div class="oitavas fase-ativa">
                <div class="box-oitavas">
                    <h4>Oitavas 1</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>DEATH SQUAD</th><td>2</td><td>X</td><td>1</td><th>HEROES DE LA PATRIA</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 2</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>PRO GAMING</th><td>2</td><td>X</td><td>0</td><th>SWAT BRASIL PRO</th>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 3</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>HUNTERS</th><td>0</td><td>X</td><td>2</td><th>VETERANOS DE GUERRA</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 4</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>Z SPECIAL UNITED</th><td>-</td><td>X</td><td>-</td><th>CLAN-PEOES</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 5</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>JAGUNÇOS</th><td>0</td><td>X</td><td>2</td><th>CANNABIS</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 6</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>TERRORISTAS DELTA</th><td>0</td><td>X</td><td>2</td><th>THE KILL TEAM</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 7</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>LOS GEDES</th><td>1</td><td>X</td><td>2</td><th>BESTIAS DE ASALTO</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Oitavas 8</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>KAMIKAZES</th><td>2</td><td>X</td><td>0</td><th>GLORIOSOS PATRIOTAS</th>
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="quartas">
                <div class="box-oitavas">
                    <h4>Quartas 1</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>DEATH SQUAD</th><td>-</td><td>X</td><td>-</td><th>PRO GAMING</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Quartas 2</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>VETERANOS DE GUERRA</th><td>-</td><td>X</td><td>-</td><th>VENCEDOR OITAVAS 4</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Quartas 3</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>CANNABIS</th><td>-</td><td>X</td><td>-</td><th>THE KILL TEAM</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>Quartas 4</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>BESTIAS DE ASALTO</th><td>-</td><td>X</td><td>-</td><th>KAMIKAZES</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="semifinal">
                <div class="box-oitavas">
                    <h4>SEMI FINAL 1</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>VENCEDOR QUARTAS 1</th><td>-</td><td>X</td><td>-</td><th>VENCEDOR QUARTAS 2</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-oitavas">
                    <h4>SEMI FINAL 2</h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>VENCEDOR QUARTAS 3</th><td>-</td><td>X</td><td>-</td><th>VENCEDOR QUARTAS 4</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="final">
            <div class="box-oitavas">
                    <h4>FINAL </h4>
                    <div class="box-confrontos-oitavas">
                        <table border="1">
                            <tr>
                                <th>VENCEDOR SEMFINAL 1</th><td>-</td><td>X</td><td>-</td><th>VENCEDOR SEMIFINAL 2</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="js/rodada.js">
    </script>
    <script src="js/controles-fases.js"></script>
</body>
</html>