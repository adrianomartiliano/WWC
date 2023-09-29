<?php
    require_once '../../menu.html';
    require_once '../../conn.php';

    $sql = mysqli_query($conectar, "SELECT * FROM CLAN ORDER BY NOME_CLAN");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cadastro.css">
    <title>Formulário de Registro</title>
</head>
<body>
    
    <form action="salvainscricao.php" method="POST" class="formarea">
    <h2>Cadastro</h2>
        <div class="emailarea">
            <label for="email">Email</label>
            <input class="inputform" type="email" id="email" name="email" required>
        </div>

    
        <div class="idclanarea">
            <div class="idarea">
                <label for="id">ID</label>
                <input class="inputform inputid" type="text" id="id" name="id" required>
            </div>
            <div class="clanarea">
                <label for="clan">Clan</label>
                <select class="inputform inputclan" id="clan" name="clan">
                    <?php
                        while($aux = mysqli_fetch_assoc($sql)) {  
                            echo "<option value='". $aux['NOME_CLAN']. "'>". $aux['NOME_CLAN'] ."</option>";
                        }
                    ?>
                </select>
            </div>
            
        
        </div>
        <div class="nicknamearea">
            <label for="nickname">Nickname</label>
            <input class="inputform" type="text" id="nickname" name="nickname" required>
        </div>
        <div class="whatsapparea">
            <label for="whatsapp">WhatsApp</label>
            <input class="inputform" type="text" id="whatsapp" name="whatsapp" required>
        </div>
        
        <div class="senhaarea">
            <label for="senha">Senha</label>
            <input class="inputform" type="password" id="senha" name="senha" required>
        </div>
        <div class="senhaconfirmarea">
            <label for="senha_confirm">Confirme a Senha</label>
    
            <input class="inputform" type="password" id="senha_confirm" name="senha_confirm" required>
            <div id="senha-confirm-message"></div><!-- Elemento para exibir a mensagem -->
            
            
        </div>


        <div class="btnArea">
            <input class="btn" type="submit" value="Criar Conta">
            <a href="./" >Já tenho conta</a>
        </div>
        
    </form>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const senhaInput = document.getElementById('senha');
    const senhaConfirmInput = document.getElementById('senha_confirm');
    const senhaConfirmMessage = document.getElementById('senha-confirm-message');

    senhaConfirmInput.addEventListener('input', function() {
        const senha = senhaInput.value;
        const senhaConfirm = senhaConfirmInput.value;

        if (senha === senhaConfirm) {
            senhaConfirmMessage.textContent = 'Ok';
            senhaConfirmMessage.style.color = 'green';
        } else {
            senhaConfirmMessage.textContent = 'Senhas não são iguais';
            senhaConfirmMessage.style.color = 'red';
        }
    });
});
</script>
