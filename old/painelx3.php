<?php
    require_once 'conexao.php';

    $sql = mysqli_query($conectar, "SELECT * FROM X3 ORDER BY pontos desc, kills desc, pontoscombate desc") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
    );

    $equipe = array();
        while($aux = mysqli_fetch_assoc($sql)) {  
            $equipe[] = $aux["nome"];
            $pontos[] = $aux["pontos"];
            $kills[] = $aux["kills"];
            $pc[] = $aux["pontoscombate"];
            $contato[] = $aux["contato"];

            $rodada1[] = $aux["rodada1"];
            $rodada2[] = $aux["rodada2"];
            $rodada3[] = $aux["rodada3"];

        }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel X3</title>
</head>
<body>
    <div class="inserirRodada">
        <br/><h2>X3</h2>
        <form action="alteratabelax3.php" method="post">
            <?php
                echo "<div id='linha1select'><div><select name='duplaesq'>";
                for ($i=0; $i<count($equipe); $i++){
                    echo "<option value='". $equipe[$i]; echo "'>". $equipe[$i]; echo "</option>";
                }
                echo "</select>X";
                echo "<select name='dupladir'>";
                for ($i=0; $i<count($equipe); $i++){
                    echo "<option value='". $equipe[$i]; echo "'>". $equipe[$i]; echo "</option>";
                }
                echo "</select></div>";

                echo "
                    <div>
                      Pontos<input type='number' name='pontosesq' placeholder='Pesq' default-value='0'> X
                      <input type='number' name='pontosdir' placeholder='Pdir' default-value='0'>Pontos
                    </div>
                    <div>
                    Kills<input type='number' name='kesq' placeholder='Kills' default-value='0'> X
                    <input type='number' name='kdir' placeholder='Kills' default-value='0'>Kills
                    </div>
                    PC<input type='number' name='pcesq' placeholder='PC' default-value='0'> X 
                    ";
                    
                echo "<input type='number' name='pcdir' placeholder='PC' default-value='0'>PC
                      
                    <div>
                    Rodada 1<input type='number' name='rodada1e' default-value='0'> X
                    <input type='number' name='rodada1d'default-value='0'>Rodada 1
                    </div>

                    <div>
                    Rodada 2<input type='number' name='rodada2e' default-value='0'> X
                    <input type='number' name='rodada2d' default-value='0'>Rodada 2
                    </div>
                    
                    <div>
                    Rodada 3<input type='number' name='rodada3e' default-value='0'> X
                    <input type='number' name='rodada3d' default-value='0'>Rodada 3
                    </div>
                ";
                echo "<div><input type='submit' value='SALVAR' name='submit' id='btn-salvar'></div></div>";
            ?>
        </form>
    </div>
    
</body>
</html>