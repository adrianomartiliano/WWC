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

    if (empty($_POST['rodada2e'])) { $rodada2e = 0;} else { $rodada2e = $_POST['rodada2e'];}
    if (empty($_POST['rodada2d'])) { $rodada2d = 0;} else { $rodada2d = $_POST['rodada2d'];}

    if (empty($_POST['rodada3e'])) { $rodada3e = 0;} else { $rodada3e = $_POST['rodada3e'];}
    if (empty($_POST['rodada3d'])) { $rodada3d = 0;} else { $rodada3d = $_POST['rodada3d'];}


    
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

    $novarodada2e = $rodada2e + $result1['rodada2'];
    $novarodada2d = $rodada2d + $result2['rodada2'];
    
    $novarodada3e = $rodada3e + $result1['rodada3'];
    $novarodada3d = $rodada3d + $result2['rodada3'];



    $alteracao1 = mysqli_query($conectar, "UPDATE X3 
    SET pontos = '$novoPontos1', kills = '$novoKills1', pontoscombate='$novoPC1', rodada1='$rodada1e', rodada2='$rodada2e', rodada3='$rodada3e' WHERE nome='$duplaesq'");
    
    $alteracao2 = mysqli_query($conectar, "UPDATE X3 
    SET pontos = '$novoPontos2', kills = '$novoKills2', pontoscombate='$novoPC2', rodada1='$rodada1d', rodada2='$rodada2d', rodada3='$rodada3d' WHERE nome='$dupladir'");

    echo "<META HTTP-EQUIV='Refresh' CONTENT='1 ; URL= painel.php'>";

?>