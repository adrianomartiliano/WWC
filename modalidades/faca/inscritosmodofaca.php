<?php
require_once '../../conexao.php';

//selecionando o banco de dados 
$db = mysqli_select_db($conectar, 'u836711676_wwc');

$sql = mysqli_query($conectar, "SELECT * FROM modofaca ORDER BY nickname") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
  );


?>
<link rel="stylesheet" href="inscritosfaca.css">
<script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
<section class="inscritos">
    <h1>COMPETIDORES - COMPETITORS</h1>
    <table id="inscritosx1">
        <tr class="tr-linha">
            <th>ID</th><th>Nickname</th><th>Contato</th>
        </tr>
        <?php
            //pecorrendo os registros da consulta. 
            while($aux = mysqli_fetch_assoc($sql)) {  
                echo "<tr><td>" .$aux["id"]. "</td><td>" .$aux["nickname"]. " - ". $aux["clan"]. "</td>
                <td><a target='_blank' href='https://api.whatsapp.com/send?phone=". $aux["contato"]; echo"'><i style=' color:green;' class='fa-brands fa-whatsapp fa-2x'></i></a></td>
                </tr>"; 
            }
        ?>
    </table>
</section>
