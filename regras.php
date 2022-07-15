<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/regras.css">
    <script src="js/function-regras.js"></script>
    <title>WWC</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="index.php"><img src="images/wwc2.png" alt=""></a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <a href="regras.php"><li>REGRAS</li></a>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <a href=""><li>REGRAS</li></a>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <div class="regras">
        <h1>REGRAS</h1>
        <div class="regras-s1">
            <h3 onclick="MudarVisibilidade('cont-s1')">Sobre as Equipes</h3>
            <div id="cont-s1">Conteudo 1</div>
        </div>
        <div class="regras-s2">
            <h3 onclick="MudarVisibilidade('cont-s2')">Sobre as Partidas</h3>
            <div id="cont-s2">Conteudo 1</div>
        </div>
        <div class="regras-s3">
            <h3 onclick="MudarVisibilidade('cont-s3')">Sobre o Torneio</h3>
            <div id="cont-s3">Conteudo 1</div>
        </div>
    </div>
    <footer><h5>By: G O K U & DALMO-ROJO</h5></footer>
</body>
</html>