<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        #balao-mensagem {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  padding: 10px;
  z-index: 1;
}
    </style>
    <title>Inscrição X1</title>
</head>
<body>
    <header>
        <?php 
            require_once '../../menu.html';
            require_once '../../conexao.php';
            $sql = mysqli_query($conectar, "SELECT * FROM CLAN ORDER BY nome");
        ?>
    </header>

    <form action="salvainscricao.php" method="post" id="form-x1">
        <h1 class="tit-form">INSCRIÇÃO X1</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">NickName</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nickname" required>
        </div>
        <div id="linha2-clan-e-id">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id" required>
            </div>
            <div class="input-group mb-3 form-clan">
                <span class="input-group-text" id="inputGroup-sizing-default" name="clan" >Clan</span>
                <select name="clan" id="form-clan" class="form-control">
                    <?php
                        while($aux = mysqli_fetch_assoc($sql)) {  
                            echo "<option value='". $aux['nome']. "'>". $aux['nome'] ."</option>";
                        }
                    ?>
                </select>
            </div>
            
        </div>
        <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">WhatsApp</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="meu-input" name="whatsapp" required>
            </div>
            <input type="submit" value="Enviar" class="btn-enviar-form">
        

    </form>
    <div id="balao-mensagem">Digite uma mensagem aqui</div>
    <script>
        var input = document.getElementById("meu-input");
        input.addEventListener("focus", function() {
        var balao = document.getElementById("balao-mensagem");
        balao.style.display = "block";
        });

        input.addEventListener("blur", function() {
        var balao = document.getElementById("balao-mensagem");
        balao.style.display = "none";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>