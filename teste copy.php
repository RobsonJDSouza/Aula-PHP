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

        echo "Robson José de Souza tem ". strlen ("Robson José de Souza")." letras"; // Contar contidade de letras
        echo "<hr>";
        echo "Robson José de Souza ". str_word_count ("Robson José de Souza"). " palavras"; //Contar a qtde de palavras
        echo "<hr>";
        echo "Reverter o nome ". strrev ("Robson Jose de Souza"); //Mudar a direção da palavra de tras para frente
        echo "<hr>";
        echo "Procurar o nome José ". strpos( "Robson José de Souza", "José"); // Procura a palavra e retorna a possição
        echo "<hr>";
        echo str_replace ("Robson", "Sofia", "Robson Souza")//Troca a informação 
        echo "<hr>";

        
        ?>
    </body>
</html>