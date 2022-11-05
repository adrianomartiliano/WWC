<?php
    require_once 'menu.html';
    require_once 'conexao.php';

    $db = mysqli_select_db($conectar, 'u836711676_wwc');

    $sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY oitavas") or die( 
        mysqli_error($conectar) //caso haja um erro na consulta 
    );
    $jogador = array();
    $contatojogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nickname"];
        $contatojogador[] = $aux["pais"];
        $oitavas[] = $aux["oitavas"];
    }

    

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gruposx1.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>Oitavas x1</title>
</head>
<body>
    <?php
        echo "<div class='seta'><a href='rodada3x1.php'><img src='icons/seta-esquerda.ico'></a><a href='quartasx1.php'><img src='icons/seta-direita.ico'></a></div>";
        echo "<h1 class='titulo-rodada'>OITAVAS</h1>";
        echo "
            <div class='box-oitavas'>
                <h4>Oitavas 1</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>M E S S I</th><td> - </td><td>X</td><td> - </td><th>-DALMO ROJO-</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 2</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>B O S S</th><td> - </td><td>X</td><td> - </td><th>СФЯISСФ</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 3</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>Joey BRICKWALL</th><td> - </td><td>X</td><td> - </td><th>ZEUS GOD SUPREME</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 4</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>B A B A Y A G A</th><td> - </td><td>X</td><td> - </td><th>-Avast-</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 5</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>G Ф K Ц</th><td> - </td><td>X</td><td> - </td><th>Corazón negro</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 6</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>-SOTO-</th><td> - </td><td>X</td><td> - </td><th>-DAS_TREVAS-</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 7</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>KingPitbull</th><td> - </td><td>X</td><td> - </td><th>Matapombo</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='box-oitavas'>
                <h4>Oitavas 8</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>LeLecф_Ф_Mдu_BЯ</th><td> - </td><td>X</td><td> - </td><th>JOLENO MATADOR</th>
                        </tr>
                    </table>
                </div>
            </div>"; 
        
        /*for ($i=1; $i<9; $i++){
            if ($i%2 != 0){
                echo "
            <div class='box-oitavas'>
                <h4>Oitavas ". $i; echo "</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>". $jogador[$i-1]; echo "</th><td> - </td><td>X</td><td> - </td><th>". $jogador[$i]; echo "</th>
                        </tr>
                    </table>
                </div>
            </div>";    
            } else {
                echo "
            <div class='box-oitavas'>
                <h4>Oitavas ". $i; echo "</h4>
                <div class='box-confrontos-oitavas'>
                    <table border='1'>
                        <tr>
                            <th>". $jogador[$i+1]; echo "</th><td> - </td><td>X</td><td> - </td><th>". $jogador[$i]; echo "</th>
                        </tr>
                    </table>
                </div>
            </div>";
            }
    
        }*/
        
    ?>
    
</body>
</html>