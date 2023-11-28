<?php

    require "../../../conn.php";    

    // Obter os dados do formulário
    $id = $_POST['id'];
    $nickname = $_POST['nickname'];
    $clan = $_POST['clan'];
    $contato = $_POST['contato'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO TORNEIOX1 (id, nickname, clan, contato) VALUES ('$id', '$nickname', '$clan', '$contato')";

    if ($conectar->query($sql) === TRUE) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        // Redirecionar para a página inicial após 2 segundos
        echo "<script>setTimeout(function(){ window.location.href = 'https://www.ww2cup.app.br'; }, 2000);</script>";
    } else {
        echo "Erro ao cadastrar: " . $conectar->error;
    }

?>