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
        #x2menu{
            background-image: url("images/x2menu.png");
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
        <a href="x2.php"><div class="cardindex" id="x2menu"></div></a>
        <a href="finalx1.php"><div class="torneiox1 cardindex"><h1>TORNEIO X1</h1></div></a>
        <a href="campeoes.php"><div class="campeoes cardindex"><h1>QUADRO DE MEDALHAS</h1></div></a>
    </div>
    
</body>

</html>