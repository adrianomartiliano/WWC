<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/x1.css">
    <link rel="stylesheet" href="../css/inscritosx1.css">
    <title>X1</title>
</head>
    
<body>
    <?php
     require_once 'menu.html';
     require_once '../regrasx1.html';
    ?>
    <section class="inscricao">
        <div class="center">
            <div class="fundo-form">
            </div>
            <div class="form">
                <form action="">
                    <h1>SUBSCRIPTION</h1>
                    <div class="campus-form">
                        <label for="identidade">ID</label><input type="text" name="identidade" id="identidade">
                    </div>
                    <div class="campus-form">
                        <label for="nickname">NICKNAME</label><input type="text" name="nickname" id="nickname">
                    </div>
                    <div class="campus-form">
                        <label for="clan">CLAN</label><input type="text" name="clan" id="clan">
                    </div>
                    <div class="campus-form">
                        <label for="pais">COUNTRY</label><input type="text" name="pais" id="pais">
                    </div>
                    <div class="campus-form">
                        <label for="contato">WHATSAPP</label><input type="text" name="contato" id="contato">
                    </div>
                    
                    
                    <input type="button" value="OK" id="btn-enviar-inscricao">
                </form>
            </div>
        </div>
    </section><!--INSCRICAO-->
    <?php
     require_once '../inscritosx1.php';
    ?>
    
</body>
</html>