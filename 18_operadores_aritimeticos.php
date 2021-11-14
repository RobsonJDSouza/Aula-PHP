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
       /*
        Adição => +
        Subtração => -
        Divisão => /
        Multiplicação => *
        Módulo => %
        Exponenciação => **
       */

       $valor1 = 2 ;
       $valor2 = 2 ;
        
       echo 'Soma de '.$valor1. '+'.$valor2.' = '. $valor1 + $valor2 ;
       echo '</br>';

       echo 'Subtração de '.$valor1. '-'.$valor2.' = '. $valor1 - $valor2 ;
       echo '</br>';

       echo 'Divisão de '.$valor1. '/'.$valor2.' = '. $valor1 / $valor2 ;
       echo '</br>';

       echo 'Multiplicação de '.$valor1. '*'.$valor2.' = '. $valor1 * $valor2 ;
       echo '</br>';

       echo 'Módulo de '.$valor1. '%'.$valor2.' = '. $valor1 % $valor2 ;
       echo '</br>';

       echo 'Exponenciação de '.$valor1. '**'.$valor2.' = '. $valor1 ** $valor2 ;
       echo '</br>';

       echo "A soma de $valor1 + $valor2 = ". ($valor1 + $valor2) ; // Outra forma de Concatenar o código.
    ?>
    </body>
</html>