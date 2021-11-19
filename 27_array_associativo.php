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
         $pessoa = array ("nome"=> "Robson", "idade"=>"37 Anos", "altura"=>"1,79");
         $pessoa ["cidade"] = "Carapicuíba";
         echo $pessoa["nome"];
         
         echo '<hr>';

         echo '<pre>';
         print_r ($pessoa);

         echo '<hr>';

         foreach ($pessoa as $indice => $valor){
             echo $indice .": ". $valor."<br>";
         }
        ?>

    </body>
</html>