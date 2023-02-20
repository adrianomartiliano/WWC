
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grupos.css">
    
    <title>Document</title>
</head>
<body>

<?php 
require_once '../../conexao.php';

$sql = mysqli_query($conectar, "SELECT * FROM modofaca ORDER BY grupo, pontos DESC, kills DESC, pontoscombate DESC");
$cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nickname"];
        $pontos[] = $aux["pontos"];
        $pc[] = $aux["pontoscombate"];
        $kills[] = $aux['kills'];
    }

for ($i = 1; $i<8; $i++)
    {
        echo "
        <div class='grupo'>
            <table>
                <tr class='cabecalho'>
                    <th>#</th><th colspan='3'>GRUPO ". $i ."</th><th colspan='3'>P</th><th colspan='3'>K</th>
                </tr>";
                for ($y=1; $y<5; $y++)
                {
                    echo "
                        <tr>
                            <td class='posicao'>". $y ."</td><td class='jogador' colspan='3' width='200px'>". $jogador[$cont] ."</td><th class='pontos' colspan='3'>". $pontos[$cont]; echo "</th><th class='pontos' colspan='3'>". $kills[$cont]; echo "</th>
                        </tr>";   
                        $cont++;
                }
        echo "</table>
        </div>
        ";
        
    }

?>

<!-- <div id="carroselinscritos" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="grupos/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/6.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="grupos/7.png" class="d-block w-100" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carroselinscritos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carroselinscritos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>