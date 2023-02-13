<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>WWC</title>
    <style>
        
        .cardindex{
            width: 384px;
            height: 226px;
            border: 1px solid gray;
            border-radius: 5px;
            margin: 20px auto;
        }
        #x3menu{
            background-image: url("images/x3menu.png");
            background-position: center;
            background-size: cover;
        }
        #x2menu{
            background-image: url("images/x2menu.png");
            background-position: center;
            background-size: cover;
        }
        #x1faca{
            background-image: url("images/x1faca.png");
            background-position: center;
            background-size: cover;
        }
        #campeoesmenu{
            background-image: url("images/campeoesmenu.png");
            background-position: center;
            background-size: cover;
        }

    </style>
</head>
<body>
    
    <?php
        require_once 'menu.html';
    ?>
    <div class="center">
        <a href="modalidades/x3/x3.php"><div class="cardindex" id="x3menu"></div></a>
        <a href="x2.php"><div class="cardindex" id="x2menu"></div></a>
        <a href="modalidades/faca/"><div class="cardindex" id="x1faca"></div></a>
        <a href="campeoes.php"><div class="campeoes cardindex" id="campeoesmenu"><h1></h1></div></a>
    </div>
    
</body>

</html>