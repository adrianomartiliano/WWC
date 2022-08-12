<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/caixa-idioma.css">
     
    <title>WWC</title>
    <style>
        .conteudo {
            width: 200px;
            height: 200px;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 5px;
            margin: 40px auto;
            box-shadow: 0 0 10px gray;
        }
        .cronometro{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    
    <?php
        require_once 'menu.html';
    ?>

<div class="conteudo">
        <div class="cronometro" >
            <div>RODADA 1 ACABA EM:</div><br>
            <div><span class="days" id="day"></span>h : <span class="minutes" id="minute"></span>m : <span class="seconds" id="second"></span>s </div>
            
        </div>
    </div>
    <div class="idioma">
        <div id="caixa-idioma" class="idioma-op">
            <form>
                <input type="button" value="PORTUGUESE" onclick="ocultarIdioma();">
                <a href="en/index.php"><input type="button" value="ENGLISH"></button></a>
                <a href="es/index.php"><input type="button" value="ESPAÑOL"></button></a>
            </form>
        </div>
    </div>
    <!--<footer><h5>By: G O K U & DALMO-ROJO</h5></footer>-->
    
</body>
<script src="js/idioma.js"></script>
<script src="js/cronometro.js"></script>
</html>