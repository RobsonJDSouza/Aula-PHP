<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <body>
    
        <?php
        //POR CONVENÇÃO, AS CONSTATES SÃO DEFINIDAS EM LETRAS MAIÚSCULAS
        define ("NOME", "Robson Souza");
        define ("IDADE", 37);
        define ("CASADO", "casado");
        define ("ESPOSA", "Ana Souza");
        echo 'Meu nome é '.NOME. ' tenho '.IDADE. ' anos e sou '. CASADO. ' com a '.ESPOSA .'<hr>';
        ?>

        <?php
        define("NOMES", ['Robson', 'Ana', 'Sofia']);
        echo NOMES[0].'<br>';
        echo NOMES[1].'<br>';
        echo NOMES[2];
        ?>

    </body>
</html>