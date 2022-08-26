<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      $texto = 'curso completo de PHP';

      // string to lower
      echo $texto . '<br />';
      echo strtolower($texto);

      echo '<hr />';
      // string to upper
      echo $texto . '<br />';
      echo strtoupper($texto);

      echo '<hr />';
      // upper case first
      echo $texto . '<br />';
      echo ucfirst($texto);

      echo '<hr />';
      // string lenght
      echo $texto . '<br />';
      echo strlen($texto);

      echo '<hr />';
      // string replace
      echo $texto . '<br />';
      echo str_replace('PHP', 'JavaScript', $texto);

      echo '<hr />';
      // string replace
      echo $texto . '<br />';
      // 'Curso completo de PHP'
      // 0 = C; 1 = u; 2 = r; 3 = s; 4 = o ...
      echo substr($texto, 0, 14) . '... ';


    ?>

  </body>

</html>
