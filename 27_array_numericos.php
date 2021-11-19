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
    // Array Numéricos - Quqando os índices são inteiros
    $nomes = array('Robson', 'Ana', 'Sofia');
    echo '<pre>'; //O elemento html pre está organizando todas informações, ela não foi fechada
    print_r ($nomes); //Debudar a Array
    echo '<br>';

    echo $nomes[0]; //Mostrar o valor pelo índice
    echo '<br>'; 
    echo $nomes[1];
    echo '<br>';
    echo $nomes[2];
    echo '<br>';
    ?>

    <?php
    //Atribuir índice para os componetes da array
    $carros = array(1=> 'Gol', 2=>'Fit', 3=>'Civic'); 
    print_r ($carros);
    echo'<br>';
    ?>

    <?php
    //inserir elementos na array
    $frutas = array('Maça', 'Banana');
    $frutas[] = "Mamão";
    $frutas[7] = "Abacaxi";
    print_r ($frutas);
    echo'<br>';
    ?>

    <?php
    //Outra forma de manipulação de array
    $clientes = ['Robson', 'Ana'];
    $clientes [4] = 'Sofia';
    print_r ($clientes);
    echo '<br>';
    echo $clientes[4];
    ?>

    </body>
</html>