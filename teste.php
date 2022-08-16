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
                <table border="1" class="rodada rodada-ativa">
                    <tr><th colspan="6" ><div class="titulo-rodada"><div class="btn-esquerda"><</div>RODADA 1<div class="btn-direita" onclick="NextRodada();">></div></div></th></tr>
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
                
        
    </div>
    <script src="js/rodada.js">
    </script>
</body>
</html>