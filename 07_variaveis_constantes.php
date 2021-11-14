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
            define( 'BD_URL' , 'endereco_bd_dev') ;
            define( 'BD_USUARIOS' , 'usuarios_dev') ;
            define( 'BD_SENHA' , 'senha_dev') ;

            echo  BD_URL .'<br/>' ;
            echo  BD_SENHA . '<br/>' ;
            echo BD_USUARIOS 
        ?>
    </body>
</html>