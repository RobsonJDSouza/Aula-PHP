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
        //Estrutura de Comtrole - Condicional
        // Igual  ==
        // Igual e mesmo tipo ===
        // Diferente != ou <> 
        // Não identico !==
        // Menor <
        // Maior >
        // Menor ou igual <=
        // Maior ou igual >=

        //Operadores Lógicos
        //Operador E (AND ou &&)
        //Operador ou (OR ou ||)
        //Operador XOR (XOR)
        //Operador Negação (!)
       
           echo '<h3>Operador Lógico E</h3>';
           if ( 4 <> 5 && 5==5){
                echo 'Verdade' ;
            }else{
                 echo 'Falso' ;
            }   

                echo '<br/>';
            
            echo '<h3>Operador Lógico OU</h3>';
            if ( 4 <> 5 || 5==5){
                echo 'Verdade' ;
            }else{
                echo 'Falso' ;
            }   
            
                echo '<br/>';
            
            echo '<h3>Operador Lógico XOR</h3>';
            if ( 4 <> 5 xor 5==5){
                echo 'Verdade' ;
            } else{
                echo 'Falso' ;
            }   

            echo '<br/>';

            echo '<h3>Operador Lógico Negação</h3>';
            if (!( 4 <> 5 xor 5==5)){
                echo 'Verdade' ;
            }else{
                echo 'Falso' ;
            }   
        ?>
    </body>
</html>