<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <body>
        <h2>Variáveis</h2>
        <h3 style="margin: 0px;">Tipos de variávies em PHP</h3> 
        string - Int - float - boolean - array <br>
         <strong>Regras para declaração de variáveis em PHP</strong>      <br>
        iniciar com uma caracter $ <br>
        Não pode conter espaço ou caracter especial - exceção do underline. <br>


        <?php
            $teste = 5;
            $teste1 = 3;
            
            echo 'A soma  de '. $teste .'+'. $teste1.'='. $teste+$teste1;
        ?>
    </body>
</html>