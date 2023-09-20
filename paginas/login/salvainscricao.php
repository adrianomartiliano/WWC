<?php
    include_once ('../../conn.php');
    $sql = mysqli_query($conectar, "SELECT * FROM USUARIOS") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
    );
    $qtdinscritos = mysqli_num_rows($sql);
    $email = $_POST['email'];
    $identidade = $_POST['id'];
    $clan = $_POST['clan'];
    $nickname = $_POST['nickname'];
    $whatsapp = $_POST['whatsapp'];
    $senha = $_POST['senha'];
    
    $resultado = mysqli_query($conectar, "INSERT INTO USUARIOS         
    VALUES ('$identidade', '$nickname', '$email',  '$clan',  '$whatsapp', '$senha')");
    echo '<script>alert("Sucesso")</script>';
    echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= login.php'>";
    
?>