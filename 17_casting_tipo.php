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
       gettype() => Retorna o tipo de variável
       Tipo de Variáveis
       integer
       double
       string
       boolean 

       integer => Float ou String
       Float => Integer ou String
       Boolean => Integer ou String
       String => Boolean, Integer e Float
       */

       $valor1 = 1;
       $valor2 = 4.0 ;
       $valor3 = 'nome' ;
       $valor4 = true ;
       $valor5  = (float) $valor1;

       echo gettype($valor1) ;
       echo '</br>' ;
       echo gettype($valor2) ;
       echo '</br>' ;
       echo gettype($valor3) ;
       echo '</br>' ;
       echo gettype($valor4);
       echo '</br>' ;
       echo gettype($valor5) ;
    ?>
    </body>
</html>