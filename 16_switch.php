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

        $parametro = 'amarelo' ;

        switch ($parametro) {
            case 'amarelo':
                echo 'Minha cor favorita é amarelo' ;
                    break;    
            case 'azul':
                echo 'Minha cor favorita é azul' ;
                    break;
            case 'vermelho':
                echo 'Minha cor favorita é vermelho' ;
                    break ;        
        }
    ?>
    </body>
</html>