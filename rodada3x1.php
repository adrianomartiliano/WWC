<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gruposx1.css">
    <script src="https://kit.fontawesome.com/35d9b76d78.js" crossorigin="anonymous"></script>
    <title>Rodada 3</title>
</head>
<body>
<?php
require_once 'menu.html';
require_once 'conexao.php';

$db = mysqli_select_db($conectar, 'u836711676_wwc');

$sql = mysqli_query($conectar, "SELECT * FROM inscritosx1 ORDER BY numerojogador") or die( 
    mysqli_error($conectar) //caso haja um erro na consulta 
);
$jogador = array();
while($aux = mysqli_fetch_assoc($sql)) {  
    $jogador[] = $aux["nickname"];
    $contatojogador[] = $aux["pais"];
}


echo "<div class='seta'><a href='rodada2x1.php'><img src='icons/seta-esquerda.ico'></a></div>";
$ajud = 0;
for ($cont=1; $cont<9; $cont++)
{

    echo "       
        </table>
        <table border='1' class='rodada'>
            <tr class='tamanho-rodada'><th colspan='6' ><div class='titulo-rodada'>GRUPO ". $cont; echo "</div></th></tr>
            <tr>
                    <th>". $jogador[$ajud]; echo "<a href='https://api.whatsapp.com/send?phone=". $contatojogador[$ajud]; echo "'><i style='margin:5px;' class='fa-brands fa-whatsapp'></i></a></th><td> - </td><th>X</th><td> - </td><th>"; echo "<a href='https://api.whatsapp.com/send?phone=". $contatojogador[$ajud+1]; echo "'><i style='margin:5px;' class='fa-brands fa-whatsapp'></i></a>". $jogador[$ajud+1]; echo"</th>
                </tr>
                <tr>
                    <th>". $jogador[$ajud+3]; echo "<a href='https://api.whatsapp.com/send?phone=". $contatojogador[$ajud+3]; echo "'><i style='margin:5px;' class='fa-brands fa-whatsapp'></i></a></th><td> - </td><th>X</th><td> - </td><th>"; echo "<a href='https://api.whatsapp.com/send?phone=". $contatojogador[$ajud+2]; echo "'><i style='margin:5px;' class='fa-brands fa-whatsapp'></i></a>". $jogador[$ajud+2]; echo"</th>
                </tr>
        </table>";
        $ajud += 4;
}
?>
    
</body>
</html>


<title>Rodada 3</title>

