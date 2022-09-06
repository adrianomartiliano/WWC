<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/x1.css">
    <link rel="stylesheet" href="css/style.css">
    <title>X1</title>
</head>
    
<body>
    <?php
     require_once 'menu.html';
    ?>
    <section class="inscricao">
        <div class="center">
            <div class="form">
                <form action="">
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
    <section class="regras"></section><!--REGRAS-->
    <section class="inscritos"></section><!--INSCRITOS-->
    
</body>
</html>