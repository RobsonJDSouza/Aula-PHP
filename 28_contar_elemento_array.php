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
            $nomes = array('Robson', 'Ana', 'Sofia');
            echo count($nomes);
            echo '<br>';

            //Posso atribui a função count a uma variável
            $carros = ['Fit', 'Gol', 'Fusca','Del Rey'];
            $totalcarros = count($carros);
            echo $totalcarros;
            echo '<br>';

            //Atribuir os elementos da array a uma varivel 
            foreach ($nomes as $valor){
            echo $valor . '<br>';
            }
        ?>

    </body>
</html>