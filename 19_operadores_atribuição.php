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
       $valor2 = 3 ;
       $valor3 = 4 ;
       $valor4 = 5 ;
       $valor5 = 6 ;
       $valor6 = 7 ;
       
       $valor1 += 2 ;
       $valor2 -= 2 ;
       $valor3 /= 2 ;
       $valor4 *= 2 ;
       $valor5 **= 2 ;
       $valor6 %= 2 ;
        
       echo 'Atribuição para soma = ' . $valor1 ;
       echo '</br>';

       echo 'Atribuição para subtração = ' . $valor2 ;
       echo '</br>';

       echo 'Atribuição para divisão = ' . $valor3 ;
       echo '</br>';

       echo 'Atribuição para multiplicação = ' . $valor4 ;
       echo '</br>';

       echo 'Atribuição para exponenciação = ' . $valor5 ;
       echo '</br>';

       echo 'Atribuição para módulo = ' . $valor6 ;
       echo '</br>';
    ?>
    </body>
</html>