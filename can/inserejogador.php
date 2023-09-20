<?php
    include_once ('../conexao.php');
    $sql = mysqli_query($conectar, "SELECT * FROM canx1") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
      );


    if(isset($_POST['submit'])){
        
        $nick = $_POST['nome'];

        $resultado = mysqli_query($conectar, "INSERT INTO canx1 VALUES ('$nick', '0', '0', '0', '0') ");
        echo '<script>alert("Sucesso")</script>';
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= ../can'>";   
    
    }
    
?>