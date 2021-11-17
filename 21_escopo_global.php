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
        $nome = "Robson Souza";
        function exibirNome() {
            global $nome;
            echo $nome;
        }
            exibirNome();
        
            echo "<hr>";

        $n1 = 2;
        $n2 = 2;
        $nt = $n1 + $n2;

        function exibirSoma() {
            global $nt;
            echo $nt;
        }
            exibirSoma();
        ?>
    </body>
</html>