<?php
    include_once ('../../conexao.php');
    $sql = mysqli_query($conectar, "SELECT * FROM X1") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
      );
    $qtd_inscritos = mysqli_num_rows($sql);
    if(isset($_POST['submit'])){
        if ($qtdinscritos > 31){
            echo "<script>alert('SEM VAGAS!!!');</script>";
        }else{
            $nickname = $_POST['nickname'];
            $id = $_POST['id'];
            $clan = $_POST['clan'];
            $whatsapp = $_POST['whatsapp'];

            $resultado = mysqli_query($conectar, "INSERT INTO X1
            VALUES ('$nickname', '$id', '$clan', '$whatsapp')");
            echo '<script>alert("Sucesso")</script>';
            echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= /'>";   
            }   
    }
    
?>