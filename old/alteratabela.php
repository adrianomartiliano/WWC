<?php

    include "protecao.php";
    include "conexao.php";


    $duplaesq = $_POST['duplaesq'];
    $dupladir = $_POST['dupladir'];

    if (empty($_POST['pontosdir'])) { $pontosdir = 0;} else {$pontosdir = $_POST['pontosdir'];}
    if (empty($_POST['pontosesq'])) { $pontosesq = 0;} else {$pontosesq = $_POST['pontosesq'];}

    if (empty($_POST['kdir'])) { $kdir = 0;} else { $kdir = $_POST['kdir'];}
    if (empty($_POST['kesq'])) { $kesq = 0;} else { $kesq = $_POST['kesq'];}

    if (empty($_POST['pcdir'])) { $pcdir = 0;} else { $pcdir = $_POST['pcdir'];}
    if (empty($_POST['pcesq'])) { $pcesq = 0;} else { $pcesq = $_POST['pcesq'];}

    if (empty($_POST['qtdjogosdir'])) { $qtdjogosdir = 0;} else { $qtdjogosdir = $_POST['qtdjogosdir'];}
    if (empty($_POST['qtdjogosesq'])) { $qtdjogosesq = 0;} else { $qtdjogosesq = $_POST['qtdjogosesq'];}


    
    
    
    $query1 = mysqli_query($conectar, "SELECT pontos, kills, pontoscombate, qtdjogos FROM classificacaox2 WHERE dupla = '$duplaesq'");
    $query2 = mysqli_query($conectar, "SELECT pontos, kills, pontoscombate, qtdjogos FROM classificacaox2 WHERE dupla = '$dupladir'");
    $result1 = mysqli_fetch_assoc($query1);
    $result2 = mysqli_fetch_assoc($query2);

    $novoPontos1 =  $pontosesq + $result1['pontos'];
    $novoPontos2 = $pontosdir + $result2['pontos'];
    $novoKills1 = $kesq + $result1['kills'];
    $novoKills2 = $kdir + $result2['kills'];
    $novoPC1 = $pcesq + $result1['pontoscombate'];
    $novoPC2 = $pcdir + $result2['pontoscombate'];
    $novoQtdjogos1 = $qtdjogosesq + $result1['qtdjogos'];
    $novoQtdjogos2 = $qtdjogosdir + $result2['qtdjogos'];



    $alteracao1 = mysqli_query($conectar, "UPDATE classificacaox2 
    SET pontos = '$novoPontos1', kills = '$novoKills1', pontoscombate='$novoPC1', qtdjogos = '$novoQtdjogos1' 
    WHERE dupla='$duplaesq'");
    $alteracao2 = mysqli_query($conectar, "UPDATE classificacaox2 
    SET pontos = '$novoPontos2', kills = '$novoKills2', pontoscombate='$novoPC2', qtdjogos = '$novoQtdjogos2' 
    WHERE dupla='$dupladir'");

?>