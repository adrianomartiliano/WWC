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
            <div class="torneiosAbertosArea">
                <p class="tituloCard">Torneios Abertos</p>
                <div class="torneioX1">
                    <p class="tituloTorneio">X - 1</p>

                    <div class="linhaRegrasInscricao">
                        <div class="regrasX1">
                            <img src="../icones/iconregras.png" alt="" class="icon_x1">
                            <p>Regras</p>
                        </div>
                        <div class="inscricaoX1">
                            <img src="../icones/icons_inscricao.png" alt="">
                            <p>Inscrição</p>
                        </div>
                    </div>
                    <div class="jogadoresInscritos">
                        <img src="../icones/icon_confirmacao.png" alt="">
                        <p>Jogadores <br />Inscritos</p>
                    </div>

                </div>
            </div>

        </div>
        
    </body>
    </html>