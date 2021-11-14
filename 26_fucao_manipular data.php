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
    <?php
        // Recuperação da data atual / data correte
       // Pesqusar a documentação do PHP https://www.php.net/manual/pt_BR/function.date.php
      
       // dia/data/ano - horário
        echo date( 'd/F/Y  H:i ') ;  
        echo '</br>';

        // Recuperar o timezone default da apliccação
        echo date_default_timezone_get ();
        echo '</br>';
        
        //https://www.php.net/manual/pt_BR/timezones.php
        // Forçar o timezone oficial do Brasil
        // Podemos modidificar o timezone no xampp php.ini
        date_default_timezone_set('America/Sao_Paulo'); 
        echo '</br>';

        // Calcular data - Por padrão é calculado no formato computacional "Padrão da data Americano" - Ano - Mês  - Dia
        //modificar a data para timestamp - 01/01/1970
        //Variavel para data
        $data_inicial = '2021-10-05' ;
        $data_final = '2021-10-08' ;
        //Variavel para modificar a data em milessegundos
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final) ;
        //Variável para subtração 
        echo $sub_data = abs($time_inicial - $time_final) ;
        echo '</br>';
        //Variavel para encontrar dia
        $segundos = 24*60*60 ;
        //Finalizando para encontrar a quantidade de dia entre as datas
        echo $sub_data / $segundos ;
    ?>
    </body>
</html>