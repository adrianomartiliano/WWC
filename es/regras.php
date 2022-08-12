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
    <?php
        include 'menu.html';
    ?>
    <div class="regras">
        <h1>NORMAS</h1>
        <div class="regras-s1">
            <h3 onclick="MudarVisibilidade('cont-s1')">Equipos</h3>
                <ul id="cont-s1">
                    <li class="cont-regras">Compuesto por 4 jugadores;</li>
                    <li class="cont-regras">Máximo de 5 equipos por CLAN;</li>
                    <li class="cont-regras">Un mismo jugador (id) no puede participar en más de un equipo;</li>
                    <li class="cont-regras">Los miembros del equipo deben ser de la misma afiliación de clan;</li>
                    <li class="cont-regras">Después de que comience el torneo, los jugadores no podrán cambiar de equipo;</li>
                    <li class="cont-regras">Si falta 1 miembro para que se lleve a cabo la batalla, se puede jugar un sustituto;</li>
                    <li class="cont-regras">Este miembro debe ser del mismo clan;</li>
                    <li class="cont-regras">El miembro no puede haber estado inscrito en ningún equipo;</li>
                    <p class="cont-regras">Este miembro no puede jugar para más de 1 equipo por ronda;</p>
                    <li class="cont-regras">Se debe designar un capitán para que se encargue de programar los combates;</li>
                    <li class="cont-regras">Al registrarse en el equipo, se debe dar un nombre para unirse a la etiqueta CLAN;</li>
                    <p class="cont-regras">Ejemplo: CAN – Soldados del Mal, Mund – Asesinos, WU – Fantasma;</p>
                </ul>
            
        </div>
        <div class="regras-s2">
            <h3 onclick="MudarVisibilidade('cont-s2')">Sobre as Partidas</h3>
            <ul id="cont-s2">
                <li class="cont-regras">Modo mata-mata;</li>
                <li class="cont-regras">Total de 3 partidas</li>
                <li class="cont-regras">A equipe que conseguir 2 vitórias primeiro vence;</li>
                <li class="cont-regras">As primeiras 2 partidas serão em HOST alternadas;</li>
                <li class="cont-regras">Caso precise da terceira, a equipe com mais pontos somados tem o direito da host;</li>
            </ul>
        </div>
        <div class="regras-s3">
            <h3 onclick="MudarVisibilidade('cont-s3')">Sobre os Equipamentos</h3>
            <ul id="cont-s3">
                <li class="cont-regras">Apenas granadas básicas;</li>
                <li class="cont-regras">Kit médico a escolha do jogador;</li>
                <li class="cont-regras">Apenas Radar e Anti Radar;</li>
                <li class="cont-regras">Todas as armas permitidas;</li>
                <li class="cont-regras">Todos os coletes Permitidos;</li>
            </ul>
        </div>

        <div class="regras-s4">
            <h3 onclick="MudarVisibilidade('cont-s4')">Sobre as Datas</h3>
            <ul id="cont-s4">
                <li class="cont-regras">A rodada terá uma duração de 4 dias;</li>
                <li class="cont-regras">Os capitães serão avisados sobre o início da rodada;</li>
                <li class="cont-regras">Caso um capitão não consiga ou não tenha retorno da outra equipe, Vencerão por WO;</li>
                <li class="cont-regras">Para ganhar o pontos por WO o capitão precisará provar com capturas de tela a falta de 	interesse do adversário;</li>
            </ul>
        </div>
        <div class="regras-s5">
            <h3 onclick="MudarVisibilidade('cont-s5')">Sobre o Torneio</h3>
            <ul id="cont-s5">
                <li class="cont-regras">As equipes nos grupos se enfrentam;</li>
                <li class="cont-regras">Os 2 primeiros passam de fase direta;</li>
                <li class="cont-regras">os 4 terceiros colocados mais bem pontuados passarão de fase;</li>
                <li class="cont-regras">Novo sorteio para definir as chaves;</li>
                <li class="cont-regras">Sequência das chave até o final;</li>
            </ul>
        </div>
    </div>
    <!--<footer><h5>By: G O K U & DALMO-ROJO</h5></footer>-->
</body>
</html>