<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      // arrays multidimensional
      $listas_coisas = [];

      $listas_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maça', 3 => 'Morango', 4 => 'Uva');
      $listas_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

      echo '<pre>';
        print_r($listas_coisas);
      echo '</pre>';

      echo '<hr>';
      echo $listas_coisas['frutas'][3];

      echo '<hr>';
      echo $listas_coisas['pessoas'][2];

    ?>

  </body>

</html>
