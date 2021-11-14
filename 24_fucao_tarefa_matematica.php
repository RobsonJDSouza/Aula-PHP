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
    <?php
    
       $nome = 'Robson';

       // STRTOLOWER
       echo 'Varialvel natural = ' . $nome . '</br>';
       echo 'Variável modificada = ' . strtolower ($nome) . '</br>'. '</br>';

       //STRTOUPPER
       echo 'Varialvel natural = ' . $nome . '</br>';
       echo 'Variável modificada = ' . strtoupper ($nome) . '</br>' . '</br>';

         //UCFIRST
         echo 'Varialvel natural = ' . $nome . '</br>';
         echo 'Variável modificada = ' . ucfirst ($nome) . '</br>' . '</br>';

         //STRLEN
         echo 'Varialvel natural = ' . $nome . '</br>';
         echo 'Variável modificada = ' . strlen ($nome) . '</br>' . '</br>';

           //STR REPLACE
           echo 'Varialvel natural = ' . $nome . '</br>';
           echo 'Variável modificada = ' . str_replace ('Robson', 'Ana', $nome) . '</br>' . '</br>';
           
           //SUBSTR
           echo 'Varialvel natural = ' . $nome . '</br>';
           echo 'Variável modificada = ' . substr ($nome,'0', '2' ) . '</br>' . '</br>';

    ?>
    </body>
</html>