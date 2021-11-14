<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatanação</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <body>

    <?php

        $idade = 10 ;
        $peso = 80  ;

        if ($idade <= 69 && $peso <=70){
            echo 'Atende os requisitos. Poderá doar sangue' ;
        }else{
            echo 'Não atende aos requisitos. Não poderá doar sangue' ;
        }
    ?>
    
    </body>
</html>