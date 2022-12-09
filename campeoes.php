<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/campeoes.css">
    <title>CAMPEÕES</title>
</head>
<body>
    <?php
        require_once 'menu.html';
    ?>

    <section class="campeoes">
        <div class="center">
            <div class="menucampeoes"><h1 id="menuclans" onClick="clanvisivel()">CLANS</h1><h1 id="menujogadores" onClick="jogadoresvisivel()" style="color:gray">JOGADORES</h1></div>
            <div class="conteudo-campeoes">
                <div id="clans-campeoes">
                    <div class="list-clan"><p>WINNERS</p><img src="images/ourox1.png" alt=""><img src="images/pratax1.png" alt=""><img src="images/bronzex4.png" alt=""></div>
                    <div class="list-clan"><p>WU</p><img src="images/ourox4.png" alt=""><img src="images/bronzex1.png" alt=""></div>
                    <div class="list-clan"><p>CANGACEIROS</p><img src="images/pratax4.png" alt=""></div>
                    
                </div>
                <div id="jogadores-campeoes" class="inativo">
                    <div class="list-jogadores"><p>Joey BRICKWALL</p><img src="images/ourox4.png" alt=""><img src="images/bronzex1.png" alt=""></div>
                    <div class="list-jogadores"><p>B O S S</p><img src="images/ourox4.png" alt=""></div>
                    <div class="list-jogadores"><p>1420lopez</p><img src="images/ourox4.png" alt=""></div>
                    <div class="list-jogadores"><p>ILLUSTRIOUS ONER</p><img src="images/ourox4.png" alt=""></div>
                    <div class="list-jogadores"><p>G Ф K Ц</p><img src="images/pratax4.png" alt=""></div>
                    <div class="list-jogadores"><p>LeLecф_Ф_Mдu_BЯ</p><img src="images/pratax4.png" alt=""></div>
                    <div class="list-jogadores"><p>Maltryx</p><img src="images/pratax4.png" alt=""></div>
                    <div class="list-jogadores"><p>BLДCK -Ф- KELLДЯ</p><img src="images/pratax4.png" alt=""></div>
                    <div class="list-jogadores"><p>GOD OF WAR</p><img src="images/bronzex4.png" alt=""></div>
                    <div class="list-jogadores"><p>BLESSED</p><img src="images/bronzex4.png" alt=""></div>
                    <div class="list-jogadores"><p>TERMINATOR</p><img src="images/bronzex4.png" alt=""></div>
                    <div class="list-jogadores"><p>KING PITBULL</p><img src="images/bronzex4.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<script>
    var clans = document.getElementById("clans-campeoes");
    var textclan = document.getElementById("menuclans");
    var textjogadores = document.getElementById("menujogadores");
    var jogadores = document.getElementById("jogadores-campeoes");
    function clanvisivel(){
        jogadores.className = "inativo";
        clans.className = "";
        textjogadores.style.color = "gray";
        textclan.style.color = "black";
    }
    function jogadoresvisivel(){
        jogadores.className = "";
        clans.className = "inativo";
        textjogadores.style.color = "black";
        textclan.style.color = "gray";
    }
</script>