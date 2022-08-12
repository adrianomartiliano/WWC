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
        <h1>RULES</h1>
        <div class="regras-s1">
            <h3 onclick="MudarVisibilidade('cont-s1')">Teams</h3>
                <ul id="cont-s1">
                    <li class="cont-regras">Composed of 4 players;</li>
                    <li class="cont-regras">Maximum of 5 teams per CLAN;</li>
                    <li class="cont-regras">The same player (id) cannot participate in more than one team;</li>
                    <li class="cont-regras">Team members must be of the same clan affiliation;</li>
                    <li class="cont-regras">After the tournament starts, players will not be able to change teams;</li>
                    <li class="cont-regras">If 1 member is missing for the battle to take place, a substitute can be played;</li>
                    <li class="cont-regras">This member must be from the same clan;</li>
                    <li class="cont-regras">The member cannot have been enrolled in any team;</li>
                    <p class="cont-regras">This member cannot play for more than 1 team per round;</p>
                    <li class="cont-regras">A captain must be appointed to be responsible for scheduling fights;</li>
                    <li class="cont-regras">Upon team registration, a name must be given to join the CLAN tag;</li>
                    <p class="cont-regras">Example: CAN – Soldiers of Evil, Mund – Killers, WU – Ghost;</p>
                </ul>
            
        </div>
        <div class="regras-s2">
            <h3 onclick="MudarVisibilidade('cont-s2')">Matches</h3>
            <ul id="cont-s2">
                <li class="cont-regras">Deathmatch mode;</li>
                <li class="cont-regras">Total of 3 matches;</li>
                <li class="cont-regras">The team that gets 2 victories first wins;</li>
                <li class="cont-regras">The first 2 matches will be on alternate HOST;</li>
                <li class="cont-regras">If you need the third, the team with the most points has the right to host;</li>
            </ul>
        </div>
        <div class="regras-s3">
            <h3 onclick="MudarVisibilidade('cont-s3')">Equipment</h3>
            <ul id="cont-s3">
                <li class="cont-regras">Basic grenades only;</li>
                <li class="cont-regras">Medical kit of the player's choice;</li>
                <li class="cont-regras">Only Radar and Anti Radar;</li>
                <li class="cont-regras">All weapons allowed;</li>
                <li class="cont-regras">All vests Allowed;</li>
            </ul>
        </div>

        <div class="regras-s4">
            <h3 onclick="MudarVisibilidade('cont-s4')">Dates</h3>
            <ul id="cont-s4">
                <li class="cont-regras">The round will last for 4 days;</li>
                <li class="cont-regras">Captains will be notified of the start of the round;</li>
                <li class="cont-regras">If a captain is unable or does not have a return from the other team, they will win by WO;</li>
                <li class="cont-regras">To earn points by WO, the captain will need to prove with screenshots the lack of interest of the opponent;</li>
            </ul>
        </div>
        <div class="regras-s5">
            <h3 onclick="MudarVisibilidade('cont-s5')">Tournament</h3>
            <ul id="cont-s5">
                <li class="cont-regras">The teams in the groups face off;</li>
                <li class="cont-regras">The first 2 pass from direct phase;</li>
                <li class="cont-regras">The 4 highest-scoring third-placed teams will advance to the next stage;</li>
                <li class="cont-regras">New draw to define the keys;</li>
                <li class="cont-regras">Key sequence to the end;</li>
            </ul>
        </div>
    </div>
    <!--<footer><h5>By: G O K U & DALMO-ROJO</h5></footer>-->
</body>
</html>