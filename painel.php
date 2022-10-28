<?php
    include "menu.html";
    include "protecao.php";
    include "conexao.php";
    
    $db = mysqli_select_db($conectar, 'u836711676_wwc');

    $sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY numerojogador") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
    );

    $cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {
        $jogador[] = $aux["nickname"];
    }
    if(isset($_POST['submit'])){
        $placaresq = $_POST['placaresq'];
        $placardir = $_POST['placardir'];
    
        $pontosesq = $_POST['pontosesq'];
        $pcesq = $_POST['pcesq'];
    
        $pontosdir = $_POST['pontosdir'];
        $pcdir = $_POST['pcdir'];
        
        $jogadordir = $_POST['direita'];
        $jogadoresq = $_POST['esquerdo'];
    
        $resultado1 = mysqli_query($conectar, "UPDATE inscritosx1 SET rodada2='$placaresq', pontos='$pontosesq', pontoscombate='$pcesq' WHERE nickname='$jogadoresq'");
        $resultado2 = mysqli_query($conectar, "UPDATE inscritosx1 SET rodada2='$placardir', pontos='$pontosdir', pontoscombate='$pcdir' WHERE nickname='$jogadordir'");
        echo '<script>alert("Sucesso")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <title>ADM</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?></h1>
    <a href="logout.php">SAIR</a>

    <div class="inserirRodada">
        <form action="painel.php" method="post">
            <?php
                echo "<div class='linha1'><h1>RODADA 3</h1><select name='esquerdo' id='esquerdo'>";
                for ($i=0; $i<32; $i++){
                    echo "<option value='". $jogador[$i]; echo "'>". $jogador[$i]; echo "</option>";
                }
                echo "</select> X ";
                echo "<select name='direita'>";
                for ($i=0; $i<32; $i++){
                    echo "<option value='". $jogador[$i]; echo "'>". $jogador[$i]; echo "</option>";
                }
                echo "</select><br><br>";

                echo "<input type='number' name='placaresq' id='placaresq'> X <input type='number' name='placardir' id='placardir'><br><br>";
                
                echo "<input type='number' name='pontosesq' placeholder='P'><input type='number' name='pcesq' placeholder='PC'> X <input type='number' name='pontosdir' placeholder='P'>";
                echo "<input type='number' name='pcdir' placeholder='PC'><br>";
                echo "<input type='submit' value='SALVAR' name='submit' id='btn-salvar'></div>";
            ?>
        </form>
    </div>
</body>
</html>