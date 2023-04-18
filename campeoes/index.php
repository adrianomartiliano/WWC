<?php
    require_once '../menu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Campeões</title>
</head>
<body>
<section class="campeoes">
        <div class="center">
            <div class="menucampeoes"><h1 id="menuclans" onClick="clanvisivel()">CLANS</h1><h1 id="menujogadores" onClick="jogadoresvisivel()" style="color:gray">JOGADORES</h1></div>
            <div class="conteudo-campeoes">
                <div id="clans-campeoes">
                    <div class="list-clan">
                        <p>TWIN</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                            <img src="../images/ouro.png" alt="">
                            <img src="../images/prata.png" alt="">
                            <img src="../images/bronze.png" alt="">
                        </div>
                    </div>
                    <div class="list-clan">
                        <p>WU</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                            <img src="..images/bronze.png" alt="">
                        </div>
                    </div>
                    <div class="list-clan">
                        <p>CAN</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-clan">
                        <p>MUND</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-clan">
                        <p>_GE_</p>
                        <div class="trofeus">
                            <img src="../images/bronze.png" alt="">
                        </div>
                    </div>
                    
                </div>
                <div id="jogadores-campeoes" class="inativo">
                    <div class="list-jogadores">
                        <p>Joey BRICKWALL</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                            <img src="../images/bronze.png" alt="">    
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>KING PITBULL</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                            <img src="../images/bronze.png" alt="">    
                        </div>        
                    </div>
                    <div class="list-jogadores">
                        <p>B O S S</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>1420lopez</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>ILLUSTRIOUS ONER</p>
                        <div class="trofeus">
                            <img src="../images/ouro.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>G Ф K Ц</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>LeLecф_Ф_Mдu_BЯ</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>Maltryx</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>BLДCK -Ф- KELLДЯ</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>M E S S I</p>
                        <div class="trofeus">
                            <img src="../images/prata.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>GOD OF WAR</p>
                        <div class="trofeus">
                            <img src="../images/bronze.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>BLESSED</p>
                        <div class="trofeus">
                            <img src="../images/bronze.png" alt="">
                        </div>
                    </div>
                    <div class="list-jogadores">
                        <p>TERMINATOR</p>
                        <div class="trofeus">
                            <img src="../images/bronze.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
</body>
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
</html>

