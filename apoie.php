<?php
require_once 'menu.html';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>Apoie</title>
    <style>
        .cardapoie{
            width: 80%;
            height: 20%;
            margin: 30px auto;
            background-color: #ffab07;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            color: #215D94;
            padding: 10px;
            
            
        }
        p{
            margin: 20px;
            font-size: 40px;
        }
        i{
            color: #E0453D;
        }
    </style>

</head>
<body>
    <div id="cardyoutube" class='cardapoie'><p>Subscription</p><i class="fa-brands fa-youtube fa-5x"></i></div>
    <div id="cardpix" class='cardapoie'><p>Grupo do Torneio</p><i class="fa-brands fa-whatsapp fa-5x"></i></div>
    <div id="carddoe" class='cardapoie'><p>Doe</p><i class="fa-solid fa-hand-holding-dollar fa-4x"></i></div>
    
</body>
</html>