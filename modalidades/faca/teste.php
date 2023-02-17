<?php 
    class Jogador{
        public $grupo;
        public $nick;
        public $pontos;
        public $kills;
        public $pc;
    
        function __construct($grupo, $nick, $pontos, $kills, $pc)
        {
            $this->nick = $nick;
            $this->pontos = $pontos;
        }
    }
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo</title>
    <style>
        /* #ffab07 Amarelo
        #E0453D Vermelho
        #215D94 Azul */
        *{
            font-family:arial;
        }
        .cabecalho {
            color: #215D94;
        }
        .posicao{
            padding: 2px 6px;
            background-color: #E0453D ;
            color: #ffab07;
        }
        .jogador, .pontos, .kills, .pc{
            padding: 3px;
            background-color: #ffab07;
            color: #215D94;
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <div class="grupo">
            

            <table>
                <tr class="cabecalho">
                    <th>#</th><th>GRUPO</th><th>P</th><th>K</th><th>PC</th>
                </tr>
                <?php 
                    $cont = 1;
                    while($cont < 5){
                        echo "
                        <tr>
                            <td class='posicao'>". $cont ."</td>
                            <td class='jogador'>Jogador ". $cont ."</td>
                            <td class='pontos'>0</td>
                            <td class='kills'>0</td>
                            <td class='pc'>000</td>
                        </tr>
                        
                        ";
                        $cont++;
                    }
                ?>
                
                
            </table>
        </div>
    </div>
    
</body>
</html>