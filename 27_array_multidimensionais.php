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
        $times = array (
            "paulista"=> array("São Paulo", "Santos"),
            "carioca"=> array("Flamengo", "Vasco"),
            "mineiro"=> array("Atletico", "Cruzeiro"));
        echo $times["paulista"] [0];
        ?>

    </body>
</html>