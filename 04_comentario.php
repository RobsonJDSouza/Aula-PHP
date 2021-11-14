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
        <h2>Comentários</h2>
        <p>Exitem 3 formas de fazer cometários em PHP</p>
        <pre> Primeira forma é: // faça o comentário aqui  - Segunda forma: #faça o comentário aqui - Terceira forma: /*faça o comentário aqui de várias linhas*/
        </pre>

        <?php  
            // este é um comentario de uma linha no PHP
            echo  'Aspas simples <br>';
            #este é um comentério de uma linha no PHP
        ?>
        <?php
            /*este é um comentário
            de várias 
            linha */
            print "Aspas dupla <hr>";
        ?>
    </body>
</html>