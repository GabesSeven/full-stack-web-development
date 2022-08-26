<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      $num = 10;

      echo '-- Início do while --<br />';

      do {
        echo '<br /> Entrou no do while <br /><br />';
      } while($num < 9);

      echo '-- Fim do while --<br />';

      echo '-- Início while --<br />';

      while($num < 9) {
        echo '<br /> Entrou no while <br />';
      }

      echo '-- Fim while --<br />';

    ?>

  </body>

</html>
