<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php

      // gettype() ==> retorna o tipo da variável
      $valor_INT = 10;
      $valor_FLOAT = 10.56;
      $valor_STRING = '22.16';
      $valor_BOOELAN = true;

      // casting de valores
      $valor2 = (float) $valor_INT;
      $valor3 = (double) $valor_INT;
      $valor4 = (string) $valor_INT;

      $valor5_1 = (int) $valor_FLOAT;
      $valor5_2 = (integer) $valor_FLOAT;
      $valor6 = (string) $valor_FLOAT;

      $valor7 = (integer) $valor_STRING;
      $valor8 = (float) $valor_STRING;
      $valor9 = (boolean) $valor_STRING;


      $valor10 = (int) $valor_BOOELAN;
      $valor11 = (string) $valor_BOOELAN;


      echo $valor_INT . ': ' . gettype($valor_INT);


      echo '<br /><hr />';
      echo '<h3>casting INT</h3>';
      echo '<br />';
      echo $valor2 . ': ' . gettype($valor2);
      echo '<br />';
      echo $valor3 . ': ' . gettype($valor3);


      echo '<br /><hr />';
      echo '<h3>casting FLOAT</h3>';
      echo $valor4 . ': ' . gettype($valor4);
      echo '<br />';
      echo $valor5_1 . ': ' . gettype($valor5_1);
      echo '<br />';
      echo $valor5_2 . ': ' . gettype($valor5_2);
      echo '<br />';
      echo $valor6 . ': ' . gettype($valor6);


      echo '<br /><hr />';
      echo '<h3>casting STRING</h3>';
      echo $valor7 . ': ' . gettype($valor7);
      echo '<br />';
      echo $valor8 . ': ' . gettype($valor8);
      echo '<br />';
      echo $valor9 . ': ' . gettype($valor9);
      echo '<br />';


      echo '<br /><hr />';
      echo '<h3>casting BOOLEAN</h3>';
      echo $valor10 . ': ' . gettype($valor10);
      echo '<br />';
      echo $valor11 . ': ' . gettype($valor11);
      echo '<br />';


    ?>

  </body>

</html>
