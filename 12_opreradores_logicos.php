<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição IF e ELSE</title>
    </head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <body>
    <?php

        $usuario_possui_cartao = false;
        $valor_da_compra = 300;
        $valor_do_frete = 50;
        $recebeu_desconto = false;

        if($usuario_possui_cartao && $valor_da_compra>=100){
            $valor_do_frete ==0;
            $recebeu_desconto== true;
            }    
    ?>

        <h3>Usuário possui o cartão da loja?</h3>
    <?php
            if($usuario_possui_cartao == true){
            echo 'Sim';
            }else{
            echo 'Não';
            }
    ?>
    </body>
</html>