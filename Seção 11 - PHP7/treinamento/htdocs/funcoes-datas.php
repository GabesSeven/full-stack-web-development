<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      // recuperação da data atual / data corrente
      echo date('d');
      echo '<br />';
      echo date('D');
      echo '<br />';
      echo date('d/m/Y H:i');
      echo '<br />';
      echo date('d-m-Y H:i');

      // recuperar o timezone default da aplicação
      echo '<br />';
      echo date_default_timezone_get();

      // atualizar o timezone default da aplicação
      echo '<br />';
      echo date_default_timezone_set('America/Cuiaba');
      echo '<br />';
      echo date('d-m-Y H:i');

      $data_inicial = '2018-04-24';
      $data_final = '2018-05-15';

      /*

         timestamp (representação da data de maneira numérica enão textual)
         01/01/1970 é a data de referência

         01/01/1970 --> 2018/04/24
         JavaScript: em milissegundos
         PHP: em segundos

      */
      echo '<br />';
      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);

      echo '<br />';
      echo $data_inicial . ' - ' . $time_inicial;
      echo '<br />';
      echo $data_final . ' - ' . $time_final;

      $diferenca_times = $time_final - $time_inicial;
      $diferenca_times_2 = abs($time_inicial - $time_final);
      echo '<br />';
      echo 'A diferença em segundos entre a data inicial e final é: ' . $diferenca_times . ' ou ' . $diferenca_times_2;

      $segundos_existem_dia = 24 * 60 * 60;
      echo '<br />';
      echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

      $diferenca_dias_entre_datas = $diferenca_times / $segundos_existem_dia;
      echo '<br />';
      echo 'A diferenca em dias é: ' . $diferenca_dias_entre_datas;



    ?>

  </body>

</html>
