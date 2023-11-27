<?php 

    require_once '../../../conn.php';

    $sql = mysqli_query($conectar, "SELECT * FROM TORNEIOX1 ORDER BY ID") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
      );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <title>Inscritos</title>
</head>
<body>
    <?php 
        require "menu.html";
    ?>
    <div class="tableArea">
        <h1>Jogadores Confirmados</h1>
        <table id="inscritosx1">
            <tr class="tr-linha">
                <th>ID</th><th>Nickname - Clan</th>
            </tr>
            <?php
                //pecorrendo os registros da consulta. 
                while($aux = mysqli_fetch_assoc($sql)) {  
                    echo "<tr class='linha'><td class='coluna'>" .$aux["ID"]. "</td><td class='coluna'>" .$aux["NICKNAME"]. " - ". $aux["CLAN"]. "</td></tr>"; 
                }
            ?>
        </table>
        
    </div>
</body>
</html>