<?php
    include "menu.html";
    include "protecao.php";
    include "conexao.php";


    $sql = mysqli_query($conectar, "SELECT * FROM classificacaox2 ORDER BY pontos desc, kills desc, pontoscombate desc") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
        );

        $dupla = array();
        while($aux = mysqli_fetch_assoc($sql)) {  
            $dupla[] = $aux["dupla"];
            $pontos[] = $aux["pontos"];
            $kills[] = $aux["kills"];
            $pc[] = $aux["pontoscombate"];
            $contato[] = $aux["contato"];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>ADM</title>
    <style>
        td, th{
            padding: 5px;
        }
        table{
            margin: 40px auto;
        }
        select{
            width: 180px;
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?></h1>
    <a href="logout.php">SAIR</a>

    <div class="inserirRodada">
        <form action="alteratabela.php" method="post">
            <?php
                echo "<div id='linha1select'><div><select name='duplaesq'>";
                for ($i=0; $i<count($dupla); $i++){
                    echo "<option value='". $dupla[$i]; echo "'>". $dupla[$i]; echo "</option>";
                }
                echo "</select>X";
                echo "<select name='dupladir'>";
                for ($i=0; $i<count($dupla); $i++){
                    echo "<option value='". $dupla[$i]; echo "'>". $dupla[$i]; echo "</option>";
                }
                echo "</select></div>";

                echo "
                    <div>
                      <input type='number' name='pontosesq' placeholder='Pesq' default-value='0'> X
                      <input type='number' name='pontosdir' placeholder='Pdir' default-value='0'>
                    </div>
                    <div><input type='number' name='kesq' placeholder='Kills' default-value='0'> X
                    <input type='number' name='kdir' placeholder='Kills' default-value='0'></div>
                    <input type='number' name='pcesq' placeholder='PC' default-value='0'> X 
                    ";
                echo "<input type='number' name='pcdir' placeholder='PC' default-value='0'>
                      <div>
                      <input type='number' name='qtdjogosesq' placeholder='QTDJogos' default-value='0'> X
                      <input type='number' name='qtdjogosdir' placeholder='QTDJogos' default-value='0'>
                      </div>";
                echo "<div><input type='submit' value='SALVAR' name='submit' id='btn-salvar'></div></div>";
            ?>
        </form>
    </div>
</body>
</html>