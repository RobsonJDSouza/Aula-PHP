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
            $teste = 5;
            $teste1 = 3;
            //Aspas Simples
            echo 'A soma  de '. $teste .'+'. $teste1.'='. $teste+$teste1 ; 

            echo ' <br/>';
            //Aspas dupla 
        
            echo "A soma de  $teste mais $teste1 = $teste + $teste1"
        ?>
    </body>
</html>