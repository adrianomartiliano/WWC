<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Administração</title>

    <style>
        .input-group-text{
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <?php
            require_once '../menu.html';
        ?>
    </header>
    <form action="#" method="post" id="form-x1">
        <h1 class="tit-form">LOGIN</h1>
        
        <div id="linha2-clan-e-id">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id-adm" required>
            </div>
            
            
        </div>
        <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="meu-input" name="senha-adm" required>
            </div>
            <input type="submit" value="Entrar" class="btn-login-adm" name="submit">
        

    </form>
    
</body>
</html>