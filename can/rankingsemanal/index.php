<?php

    require_once 'conexao.php';

    $sql = mysqli_query($conectar, "SELECT * FROM ranking_semanal ORDER BY pontos");

    $cont = 0;
    $jogador = array();
    while($aux = mysqli_fetch_assoc($sql)) {  
        $jogador[] = $aux["nickname"];
        $pontos[] = $aux["pontos"];
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ranking Semanal</title>

    <style>
        .CamposNick {
            width: 220px;
            text-align: center;
        }
        .LinhaNick{
            margin: 10px 20px;
        }
        form{
            width: 90%;
        }

    </style>

</head>
<body>

    <form action="">
<?php

    foreach($jogador as $key => $value){
        echo "
        <div class='input-group input-group-lg LinhaNick'>
        <span class='input-group-text CamposNick' id='inputGroup-sizing-lg'>".
        $value;
        echo "</span>
        <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='". number_format($pontos[$key], 0, '.', '.' ) ."'>
        </div>";
    }
?>
        

    </form>

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>