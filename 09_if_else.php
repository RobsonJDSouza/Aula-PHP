<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição IF e ELSE</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <body>
    
        <?php
        //Estrutura de Comtrole - Condicional
        // Igual  ==
        // Igual e mesmo tipo ===
        // Diferente != ou <> 
        // Não identico !==
        // Menor <
        // Maior >
        // Menor ou igual <=
        // Maior ou igual >=

        $valor = 11;

        if ($valor<10) {
            echo 'Valor menor do que 10' ;
        }else{
            echo 'Valor maior do que 10' ;
        }
        ?>   
    </body>
</html>