<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
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
        .round-card{
            max-width: 300px;
            height: 130px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffab07;
            color: #215D94;
        }
        .lin1{
            display: flex;
        }
        .nome-jogador{
            padding: 5px;
            width: 60%;
            background-color: white;
            margin: 3px;
            border-radius: 5px;
        }
        .placar, .placar-kills{
            width: 10%;
            padding: 5px;
            margin: 3px;
            background-color: white;
            text-align: center;
            border-radius: 5px;
        }
        .placar-pontosCombate{
            width: 20%;
            padding: 5px;
            margin: 3px;
            background-color: white;
            border-radius: 5px;
        }
        input{
            border: none;
            width: 100%;
            color: #215D94;
            text-align: center;
        }
        option, select{
            color: #215D94;
        }

        .section-imagens{
            width: 100%;
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
        .section-imagens i{
            margin: 10px;
            align-items: center;
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
            <option value="r1">Rodada 1</option>
            <option value="r2">Rodada 2</option>
            <option value="r3">Rodada 3</option>
            <option value="oitavas">Oitavas</option>
            <option value="oitavas">Quartas</option>
            <option value="oitavas">Semi-final</option>
            <option value="oitavas">Final</option>
        </select>
    </div>

    <!-- <div class="round-card">
        <div class="lin1"><div class='nome-jogador'>GOKU</div><div class='placar'>2</div><div class='placar-kills'>18</div><div class='placar-pontosCombate'>565</div></div>
        <div class="lin1"><div class='nome-jogador'>DALMO-ROJO</div><div class='placar'>1</div><div class='placar-kills'>15</div><div class='placar-pontosCombate'>465</div></div>
        <div class="lin3"></div>
    </div> -->
    <div class="round-card">
        <div class="lin1"><div class='nome-jogador'>GOKU</div><div class='placar'><input type="number" value='2'></div><div class='placar-kills'><input type="number" value='18'></div><div class='placar-pontosCombate'><input type="number" value='715'></div></div>
        <div class="lin1"><div class='nome-jogador'>DALMO-ROJO</div><div class='placar'><input type="number" value='1'></div><div class='placar-kills'><input type="number" value='15'></div><div class='placar-pontosCombate'><input type="number" value='465'></div></div>
        <div class="section-imagens">
            <i class="fa-solid fa-image fa-2x"></i>
            <i class="fa-solid fa-image fa-2x"></i>
            <i class="fa-solid fa-image fa-2x"></i>
        </div>
    </div>
    
</body>
</html>