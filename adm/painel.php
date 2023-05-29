<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Painel</title>
    <style>
        #conteudo-x1{
            width: 300px;
            padding: 20px;
            margin: 20px auto;
            border-radius: 15px;
            text-align: center;
            background-color: #ffab07;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.7);
            color: #215D94;
        }
        .op-adm{
            width: 150px;
            text-align: center;
            border-radius: 5px;
            font-size: 20px;
        }
        #conteudo-x1 p {
            font-size: 40px;
        }

    </style>
</head>
<body>
<header>
        <?php
            require_once '../menu.html';
        ?>
    </header>

    <div id="conteudo-x1" >
        <p>X1</p>
        <select class='op-adm'>
            <option value="r1">Rodada 1<option>
            <option value="r2">Rodada 2</option>
            <option value="r3">Rodada 3</option>
            <option value="oitavas">Oitavas</option>
            <option value="oitavas">Quartas</option>
            <option value="oitavas">Semi-final</option>
        </select>

    </div>
    
</body>
</html>