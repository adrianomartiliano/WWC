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
        require_once 'menu.html';
        require_once 'cronometro.html';
        require_once 'teste.php';
    ?>

    <!--<div class="conteudo">
        <section class="apresentacao">
            <p>Como o objetivo de tornar nossa diversão ainda mais dinâmica e ativa, World War 2 Cup foi criado.</br>
                De forma séria, organizada e imparcial  .     
            Torneio feito de jogadores para jogadores. </p>
        </section>
    </div>-->
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

</html>