<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      $num = 7.5;

      // arredonda para cima
      echo ceil($num);

      echo '<hr />';
      // arredonda para baixo
      echo floor($num);

      echo '<hr />';
      // arredonda com base nas casa decimais (na fração)
      // entre .0 e .4 arredonda para baixo
      // arredonda com base nas casa decimais
      echo round($num);

      echo '<hr />';
      // gera um valor aleatório de 0 a randmax
      echo rand() . '<br / >';
      echo rand(10, 20) . '<br / >';
      echo getrandmax() . '<br / >';

      echo '<hr />';
      // retorna a raiz quadrada
      echo sqrt(9);

    ?>

  </body>

</html>
