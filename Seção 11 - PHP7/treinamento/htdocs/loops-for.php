<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      for($x = 1; $x <= 10; $x += 2){
        if($x >= 8)
          break;

        echo "$x <br />";

      }

    ?>

  </body>

</html>
