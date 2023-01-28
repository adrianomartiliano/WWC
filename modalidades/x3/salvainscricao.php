<?php
    include_once ('../../conexao.php');
    $sql = mysqli_query($conectar, "SELECT * FROM X3") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
      );
    $qtdinscritos = mysqli_num_rows($sql);
    if(isset($_POST['submit'])){
        if ($qtdinscritos > 15){
            echo "<script>alert('SEM VAGAS!!!');</script>";
        }else{
            $nomeequipe = $_POST['nomeequipe'];
            $id1 = $_POST['id1'];
            $id2 = $_POST['id2'];
            $id3 = $_POST['id3'];
            $j1 = $_POST['j1'];
            $j2 = $_POST['j2'];
            $j3 = $_POST['j3'];
            $clan = $_POST['clan'];
            $contato = $_POST['contato'];

            $resultado = mysqli_query($conectar, "INSERT INTO X3
            VALUES ('$nomeequipe', '$j1', '$j2', '$j3', '$id1', '$id2', '$id3', '$clan', $contato)");
            echo '<script>alert("Sucesso")</script>';
            echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= ../../index.php'>";   
            }   
    }
    
?>