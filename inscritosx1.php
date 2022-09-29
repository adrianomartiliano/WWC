<?php
require_once 'conexao.php';

//selecionando o banco de dados 
$db = mysqli_select_db($conectar, 'wwc');

$sql = mysqli_query($conectar, "SELECT * FROM inscritosx1") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );


?>

<link rel="stylesheet" href="css/inscritosx1.css">
<section class="inscritos">
    <h1>COMPETIDORES - COMPETITORS</h1>
    <table id="inscritosx1">
        <tr class="tr-linha">
            <th>ID</th><th>Nickname</th>
        </tr>
        <?php
            //pecorrendo os registros da consulta. 
            while($aux = mysqli_fetch_assoc($sql)) {  
                echo "<tr><td>" .$aux["id"]. "</td><td>" .$aux["nickname"]. "</td></tr>"; 
            }
        ?>
    </table>
</section>
