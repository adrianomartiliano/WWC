<?php
    include_once ('../../conexao.php');
    $sql = mysqli_query($conectar, "SELECT * FROM modofaca") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
      );
    $qtdinscritos = mysqli_num_rows($sql);
    if(isset($_POST['submit'])){
        if ($qtdinscritos > 31){
            echo "<script>alert('SEM VAGAS!!!');</script>";
        }else{
            $identidade = $_POST['id'];
            $nickname = $_POST['nickname'];
            $clan = $_POST['clan'];
            $pais = $_POST['pais'];
            $contato = $_POST['contato'];

            $resultado = mysqli_query($conectar, "INSERT INTO modofaca
            VALUES ('$identidade', '$nickname', '$clan', '$pais', '$contato', '0', '0')");
            echo '<script>alert("Sucesso")</script>';
            echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= modofaca.php'>";   
            }   
    }
    
?>