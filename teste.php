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
        .btn-rodada{
            cursor: pointer;
        }
        .inativa {
            display: none;
        }
        .right {
            margin-right: 100px;
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
                <table border="1" class="rodada" id="rodada1a">
                    <tr><th style="width:100%" colspan="6" >RODADA 1<span class="btn-rodada right" onclick="nextrodada('rodada1a')">></span></th></tr>
                    <tr>
                        <th>PRO GAMING</th><td> 2 </td><th>X</th><td> 0 </td><th>UNITED</th>
                    </tr>
                    <tr>
                        <th>TERRORISTAS DELTA</th><td> 0 </td><th>X</th><td> 2 </td><th>HEROES DE LA PATRIA</th>
                    </tr>
                </table>
                <table border="1" class="rodada inativa" id="rodada2a">
                    <tr><th colspan="6" ><span><</span>RODADA 2<span class="btn-rodada" onclick="nextrodada('rodada2a')">></span></th></tr>
                    <tr>
                        <th>UNITED</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                    <tr>
                        <th>PRO GAMING</th><td> - </td><th>X</th><td> - </td><th>HEROES DE LA PATRIA</th>
                    </tr>
                </table>
                <table border="1" class="rodada inativa" id="rodada3a">
                    <tr><th colspan="6" ><span><</span>RODADA 3<span>></span></th></tr>
                    <tr>
                        <th>UNITED</th><td> - </td><th>X</th><td> - </td><th>HEROES DE LA PATRIA</th>
                    </tr>
                    <tr>
                        <th>PRO GAMING</th><td> - </td><th>X</th><td> - </td><th>TERRORISTAS DELTA</th>
                    </tr>
                </table>
        </div><!--Grupo A-->
                
        
    </div>
    <script>

function nextrodada(el){
    var display = document.getElementById(el).style.display;
    document.getElementById(el).style.display = 'none';
    document.getElementById('rodada2a').style.display = 'block';
}
    </script>
</body>
</html>