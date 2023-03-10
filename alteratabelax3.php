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

    if (empty($_POST['rodada1e'])) { $rodada1e = 0;} else { $rodada1e = $_POST['rodada1e'];}
    if (empty($_POST['rodada1d'])) { $rodada1d = 0;} else { $rodada1d = $_POST['rodada1d'];}


    
    $query1 = mysqli_query($conectar, "SELECT pontos, kills, pontoscombate, rodada1, rodada2, rodada3 FROM X3 WHERE nome = '$duplaesq'");
    $query2 = mysqli_query($conectar, "SELECT pontos, kills, pontoscombate, rodada1, rodada2, rodada3 FROM X3 WHERE nome = '$dupladir'");
    $result1 = mysqli_fetch_assoc($query1);
    $result2 = mysqli_fetch_assoc($query2);

    $novoPontos1 =  $pontosesq + $result1['pontos'];
    $novoPontos2 = $pontosdir + $result2['pontos'];
    $novoKills1 = $kesq + $result1['kills'];
    $novoKills2 = $kdir + $result2['kills'];
    $novoPC1 = $pcesq + $result1['pontoscombate'];
    $novoPC2 = $pcdir + $result2['pontoscombate'];

    $novarodada1e = $rodada1e + $result1['rodada1'];
    $novarodada1d = $rodada1d + $result2['rodada1'];



    $alteracao1 = mysqli_query($conectar, "UPDATE X3 
    SET pontos = '$novoPontos1', kills = '$novoKills1', pontoscombate='$novoPC1' WHERE nome='$duplaesq'");
    $alteracao2 = mysqli_query($conectar, "UPDATE X3 
    SET pontos = '$novoPontos2', kills = '$novoKills2', pontoscombate='$novoPC2' WHERE nome='$dupladir'");

?>