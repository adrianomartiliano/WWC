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
            justify-content: space-between;
            color: #215D94;
            padding: 0 20px;
            
            
        }
        p{
            margin: 20px;
            font-size: 30px;
        }
        i{
            color: #E0453D;
        }
    </style>

</head>
<body>
    <a href="https://www.youtube.com/channel/UCR3O_Mm4OvcJ-nv1CEGOxEQ" target="_blank"><div id="cardyoutube" class='cardapoie'><p>Subscription</p><i class="fa-brands fa-youtube fa-5x"></i></div></a>
    <a href="https://chat.whatsapp.com/JiFWYxNmVuMIqmPlbsTiWt" target="_blank"><div id="cardwhats" class='cardapoie'><p>Grupo do Torneio</p><i class="fa-brands fa-whatsapp fa-5x"></i></div></a>
    <a href="apoie-sobre.php"><div id="carddoe" class='cardapoie'><p>Doe</p><i class="fa-solid fa-hand-holding-dollar fa-4x"></i></div></a>
    
</body>
</html>