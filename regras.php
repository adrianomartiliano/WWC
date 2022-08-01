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
    <style>



    </style>
</head>
<body>
    <?php
        include 'menu.html';
    ?>
    <div class="regras">
        <h1>REGRAS</h1>
        <div class="regras-s1">
            <h3 onclick="MudarVisibilidade('cont-s1')">Sobre as Equipes</h3>
                <ul id="cont-s1">
                    <li class="cont-regras">Compostas por 4 jogadores;</li>
                    <li class="cont-regras">Máximo de 5 equipes por CLAN;</li>
                    <li class="cont-regras">O mesmo jogador (id) não pode participar em mais de uma equipe;</li>
                    <li class="cont-regras">Os integrantes da equipe devem ser da mesma filiação do clan;</li>
                    <li class="cont-regras">Após o início do torneio, os jogadores não poderão mudar de equipe;</li>
                    <li class="cont-regras">Caso falte 1 integrante para acontecer a batalha, poderá jogar um substituto.</li>
                    <li class="cont-regras">Esse integrante precisa ser do mesmo clan.</li>
                    <li class="cont-regras">O integrante não pode ter sido inscrito em nenhuma equipe.</li>
                    <p class="cont-regras">Esse intregrante não pode jogar por mais de 1 equipe por rodada.</p>
                    <li class="cont-regras">Um capitão deverá ser nomeado para ser o responsável por agendamentos de combates;</li>
                    <li class="cont-regras">No ato da inscrição da equipe, um nome deverá ser dado para se unir a tag do CLAN;</li>
                    <p class="cont-regras">Exemplo: CAN – Soldados do Mal, Mund – Matadores, WU – Fantasma;</p>
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
            <div id="cont-s5">A definir formato...</div>
        </div>
    </div>
    <!--<footer><h5>By: G O K U & DALMO-ROJO</h5></footer>-->
</body>
</html>