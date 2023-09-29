<!-- <?php
    // include_once ('../../conn.php');
    // $sql = mysqli_query($conectar, "SELECT * FROM USUARIOS") or die( 
    //     mysqli_error($conectar) //caso haja um erro na consulta 
    // );
    // $qtdinscritos = mysqli_num_rows($sql);
    // $email = $_POST['email'];
    // $identidade = $_POST['id'];
    // $clan = $_POST['clan'];
    // $nickname = $_POST['nickname'];
    // $whatsapp = $_POST['whatsapp'];
    // $senha = $_POST['senha'];
    
    // $resultado = mysqli_query($conectar, "INSERT INTO USUARIOS         
    // VALUES ('$identidade', '$nickname', '$email',  '$clan',  '$whatsapp', '$senha')");
    // echo '<script>alert("Sucesso")</script>';
    // echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= login.php'>";
    
?> -->

<?php
    include_once ('../../conn.php');
    $sql = mysqli_query($conectar, "SELECT * FROM USUARIOS") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
    );
    $email = $_POST['email'];
    $identidade = $_POST['id'];
    $clan = $_POST['clan'];
    $nickname = $_POST['nickname'];
    $whatsapp = $_POST['whatsapp'];
    $senha = $_POST['senha'];

    // Verifique se o ID ou o email já existem no banco de dados
    $check_query = "SELECT * FROM USUARIOS WHERE ID = '$identidade' OR EMAIL = '$email'";
    $check_result = mysqli_query($conectar, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // ID ou email já existem, emita uma mensagem de erro
        echo '<script>alert("Cadastro não realizado. ID ou email já existem no sistema.")</script>';
        echo '<script>window.history.go(-1);</script>';
    } else {
        // Insira os dados no banco de dados
        $insert_query = "INSERT INTO USUARIOS
                     VALUES ('$identidade', '$nickname', '$email', '$clan', '$whatsapp', '$senha')";

        $resultado = mysqli_query($conectar, $insert_query);

        if ($resultado) {
            // Sucesso no cadastro
            echo '<script>alert("Cadastro realizado com sucesso.")</script>';
            echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= login.php'>";
        } else {
            // Erro ao inserir os dados
            echo '<script>alert("Erro ao cadastrar. Por favor, tente novamente mais tarde.")</script>';
    
        }
    }

?>