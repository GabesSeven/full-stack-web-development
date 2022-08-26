<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      $num = 1;

      // operadores comparação / lógicos

      echo '-- Início do loop --<br />';

      while($num < 10) {

        // if($num == 8)
        //   break;

        // if ($num == 4 || $num == 6)
        //   continue;

        echo "$num <br />";
        $num++; // critério de parada
      }

      echo '-- Fim do loop --';

    ?>

  </body>

</html>
