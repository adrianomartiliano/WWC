<?php
    require_once '../../menu.html';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css_campeoes/style-campeoes.css"><title>Campeões</title>
</head>
<body>
<section class="campeoes">

        <!-- particles.js container --> 
        <div id="particles-js">

            <div id="campeoes-jogadores">
                <h1 class="btn-jogadores" >JOGADORES</h1>
            </div>
            <div id="campeoes-clans">
                <h1 class="btn-campeoes">CLANS</h1>
            </div>
            <div id="campeoes-ranking">
                <h1 class="btn-campeoes">RANKING <br>DE X1</h1>
            </div>
        </div> 
        <!-- stats - count particles --> 
        <div class="count-particles">  
            <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
            <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js">
            </script> <!-- stats.js lib --> 
            <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
            <script src="js/fundo_animado.js"></script>
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

