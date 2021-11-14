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
        function calcularIRPF ($salario){
        $imposto = 0 ;
        if( $salario<= 2000){
            $imposto ;
        }elseif($salario>2001 && $salario<=3000){
           ($imposto = $salario*15)/100 ;
        }elseif ($salario >3001 && $salario<=4000)
           ($imposto= $salario*20)/100 ;{
            else
           }

        return $imposto ;
    }

    ?>
    </body>
</html>