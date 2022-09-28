<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/x1.css">
    <title>X1</title>
</head>
    
<body>
    <?php
     require_once 'menu.html';
     require_once 'regrasx1.html';
    ?>
    <!--<section class="regras">
        <div class="center">
            <div class="tituloregras">
                <h1>REGRAS - NORMAS - RULES</h1>
            </div>
            <div class="regras-idiomas">
                <div class="regras-portugues">
                    <a href=""><i class="fa-solid fa-file-arrow-down fa-4x baixar-regras" ></i></a>
                    <h3>PORTUGUÊS</h3>
                </div>
                <div class="regras-espanhol">
                    <i class="fa-solid fa-file-arrow-down fa-4x baixar-regras" ></i>
                    <h3>ESPAÑOL</h3>
                </div>
                <div class="regras-ingles">
                    <i class="fa-solid fa-file-arrow-down fa-4x baixar-regras" ></i>
                    <h3>ENGLISH</h3>
                </div>
            </div>
            
        </div>
    </section>REGRAS-->


    <section class="inscricao">
        <div class="center">
            <div class="form">
                <form action="">
                    <h1>INSCRIÇÃO</h1>
                    <div class="campus-form">
                        <label for="nickname">NickName</label><input type="text" name="nickname" id="nickname">
                    </div>
                    <div class="campus-form">
                        <label for="identidada">ID</label><input type="text" name="identidade" id="identidade">
                    </div>
                    <div class="campus-form">
                        <label for="contato">WhatsApp</label><input type="text" name="contato" id="contato">
                    </div>
                    <div class="campus-form">
                        <label for="pais">País</label><input type="text" name="pais" id="pais">
                    </div>
                    
                    <input type="button" value="EM BREVE" id="btn-enviar-inscricao">
                </form>
            </div>
        </div>
    </section><!--INSCRICAO-->
    
    <section class="inscritos"></section><!--INSCRITOS-->
    
</body>
</html>