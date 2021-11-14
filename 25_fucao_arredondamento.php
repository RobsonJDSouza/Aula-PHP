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
    <?php
        /*
        ceil - Arredonda para cima
        floor- Arredonda para baixo
        round - Arredonda com base nas casas decimais
        rand - Gera um inteiro aleatório 
        sqtr - Retorna a raiz quadrada
        */
        $numero = 14.23 ;
        echo ceil($numero) . ' arredondamento para cima' .'</br>' ;
        echo floor($numero). ' arredondamento para baixo' .'</br>';
        echo round($numero). ' arredondamento com base nas casas decimáis' .'</br>';
        echo rand(10, 20) . ' gera um número inteiro' .'</br>' ; 
        echo sqrt($numero) .' raiz quatrada';
    ?>
    </body>
</html>