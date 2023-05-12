<?php
    require_once '../../menu.html';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeões</title>
    <style>
        /* ---- particles.js container ---- */ 
        #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #ffab07; margin-top:-60px; display:flex; } 
        /* ---- stats.js ---- */ 
         
        .js-count-particles{ font-size: 1.1em; } 
        #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } 
        #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } 
        .count-particles{ border-radius: 0 0 3px 3px; }
        </style>
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
    
    particlesJS("particles-js", {"particles":{"number":{"value":178,"density":{"enable":true,"value_area":552.4033491425909}},"color":{"value":"#e0453d"},"shape":{"type":"star","stroke":{"width":0,"color":"#41370b"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":8.017060304327606,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"bubble"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
</html>

