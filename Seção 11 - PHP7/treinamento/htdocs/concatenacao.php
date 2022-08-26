<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php
      $nome = 'Maria';
      $cor = 'amarelo';
      $idade = '25';
      $atividade_preferida = 'andar de bicicleta';

      // aspas simples, operador .
      echo 'Olá ' . $nome . ', vi que sua cor favorita é ' . $cor . ', sua idade é ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '.';
      echo '<br />';

      // aspas duplas
      echo "Olá $nome, vi que sua cor favorita é $cor, sua idade é $idade anos e que gosta de $atividade_preferida.";
      echo 'Olá $nome, vi que sua cor favorita é $cor, sua idade é $idade anos e que gosta de $atividade_preferida.'

    ?>
  </body>

</html>
