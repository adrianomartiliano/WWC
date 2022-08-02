<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/card-capitao.css">
    <link rel="stylesheet" href="css/style.css">
    <title>wwc</title>

</head>
<body>
    
    <?php
        include 'menu.html';
    ?>

    <div class="conteudo">


    
    <div class="card">
        <div class="nome-equipe"><h1>CANNABIS</h1><h4>CANGACEIROS</h4></div>
        <div class="nome-capitao"><h3><a href="#">Leleco-Mau-BR<span class="icon-whats"><i class="fa-brands fa-whatsapp"></i></span></h3></a></div>
        <div class="horario">
            <div class="hor-atual">
                <?php
                    $Object = new DateTime();  
                    $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
                    $DateAndTime = $Object->format("h:i:s a");
                    echo "Horário Atual";
                ?>
            </div>
            <img src="icons/brazil_flags_flag_9043.ico"></img>
        </div>
    </div>
    <div class="card">
        <div class="nome-equipe"><h1>JAGUNÇOS</h1><h4>CANGACEIROS</h4></div>
        <div class="nome-capitao"><h3><a href="#">CORISCO<span class="icon-whats"><i class="fa-brands fa-whatsapp"></i></span></h3></a></div>
        <div class="horario">
            <div class="hor-atual">
                <?php
                    $Object = new DateTime();  
                    $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
                    $DateAndTime = $Object->format("h:i:s a");
                    echo "Horário Atual";
                ?>
        </div>
            <img src="icons/brazil_flags_flag_9043.ico"></img>
    </div>
    </div>

    <div class="card">
        <div class="nome-equipe"><h1>CLAN-DESTINOS</h1><h4>CANGACEIROS</h4></div>
        <div class="nome-capitao"><h3><a href="#">KARKARA<span class="icon-whats"><i class="fa-brands fa-whatsapp"></i></span></h3></a></div>
        <div class="horario">
            <div class="hor-atual">
                <?php
                    $Object = new DateTime();  
                    $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
                    $DateAndTime = $Object->format("h:i:s a");
                    echo "Horário Atual";
                ?>
            </div>
            <img src="icons/brazil_flags_flag_9043.ico"></img>
        </div>
    </div>
    <div class="card">
        <div class="nome-equipe"><h1 style="font-size:20px">VETERANOS DE GUERRA</h1><h4>MUNDIALES</h4></div>
        <div class="nome-capitao"><h3><a href="#">DALMO-ROJO<span class="icon-whats"><i class="fa-brands fa-whatsapp"></i></span></h3></a></div>
        <div class="horario">
            <div class="hor-atual">
                <?php
                    $Object = new DateTime();  
                    $Object->setTimezone(new DateTimeZone('Europe/Amsterdam'));
                    $DateAndTime = $Object->format("h:i:s a");
                    echo "Horário Atual";
                ?>
            </div>
            <img src="icons/argentina-bandeira.ico"></img>
        </div>
    </div>
    </div>


    </body>
</html>