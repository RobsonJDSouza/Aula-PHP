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
        Incremento => ++ $x
        Incremento => $x ++
        Decremento => - $x
        Decremento +> $x -
       */
        
       $valor = 2 ;
       echo 'Valor do incremento = ' . $valor++ .'</br>';
       echo 'Valor do incremento = ' . ++$valor .'</br>' ;
       echo 'Valor do decremento = ' . --$valor . '</br>' ;
       echo 'Valor do decremento = ' . $valor-- . '</br>' ;
    ?>
    </body>
</html>