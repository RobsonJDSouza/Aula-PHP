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
    // Função is array
      $nome = array ("Robson", "Ana");
      echo is_array ($nome).'<br>';
      if (is_array($nome)):
        echo "É um array";
      else: 'Não é uma array';
    endif;
    
    echo '<hr>';

    // Função in array - verifica o nome está na array
    if (in_array("Sofia", $nome)):
        echo "Robson está no Array";
    else:
        echo "Esse nome não está no array";
    endif;
    ?>
    </body>
</html>