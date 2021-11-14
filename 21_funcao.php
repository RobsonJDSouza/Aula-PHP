<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <body>

    <?php
        //Função tipo VOID -  Sem retorno
        function exibirBoasVindas () {
            echo 'Boas vindas ao curso de PHP </br>' ;         
        }
        exibirBoasVindas() ;
    ?>

    <?php
        //Função tipo RETURN - Com retorno
        function calcularAreaQuadrado ($lado, $valorlado) {
            $area = $lado * $valorlado ; 
            return $area ;
        }
        function calcularAreaTerreno ($largura, $comprimento){
            return $largura * $comprimento;
        }
        echo 'Área do quadrado = ' . calcularAreaQuadrado(4 , 4) . '</br>';
        echo 'Área do terreno = ' . calcularAreaTerreno (15 , 10)   ;
    ?>
    </body>
</html>