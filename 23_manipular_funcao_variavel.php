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
    $nome = 'Robson' ;
    
    //STRTOLOWER
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . strtolower($nome) . '</br>' . '</br>' ;

    //STRTOUPPER
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . strtoupper($nome) . '</br>' . '</br>' ;

    //UCFIRST
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . ucfirst($nome) . '</br>' . '</br>' ;

    //STRLEN
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . strlen($nome) . '</br>' . '</br>' ;

    //STR REPLACE
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . str_replace ('Robson', 'Ana', $nome) . '</br>' . '</br>' ;

    //SUBSTR
    echo 'Esse é o nome sem transformação '. $nome . '</br>' ;
    echo 'Esse é o nome modificado ' . substr  ($nome, '1', '2') . '</br>' . '</br>' ;

    ?>
    </body>
</html>