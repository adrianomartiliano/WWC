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
    </style>
</head>
<body>
    
    <?php
        require_once 'grupo.php';
    ?>

    <div class="conteudo">
       <!-- <div class="cronometro" >
            <div>RODADA 1 ACABA EM:</div><br>
            <div><span class="days" id="day"></span>h : <span class="minutes" id="minute"></span>m : <span class="seconds" id="second"></span>s </div>
            
        </div>-->
    </div>
    <div class="idioma">
        <div id="caixa-idioma" class="idioma-op">
            <form>
                <input type="button" value="PORTUGUESE" onclick="ocultarIdioma();">
                <a href="en/index.php"><input type="button" value="ENGLISH"></button></a>
                <a href="es/index.php"><input type="button" value="ESPAÑOL"></button></a>
            </form>
        </div>
    </div><!--idioma-->
    
</body>
<script src="js/idioma.js"></script>
<script src="js/cronometro.js"></script>
</html>