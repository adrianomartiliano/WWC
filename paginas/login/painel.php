<?php
    require_once '../../menu.html';
    require_once '../../backend/protecao.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="painel.css">
        <title>Dash</title>
    </head>
    <body>
        <div class="barraStatusLogin">
            <p><?php
                echo "Bem vindo, " . $_SESSION['NICKNAME'];
            ?></p>

            <p>
                <a href="../../backend/logout.php">Sair</a>
            </p>
        </div>

        <div class="painelArea">
            <div class="torneioX1">
                <p>Em breve inscrição do torneio aqui</p>
            </div>

        </div>
        
    </body>
    </html>