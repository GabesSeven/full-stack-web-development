<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php

      $parametro = '2';

      /*
        PHP: comparação é feita por igualdade case 1 == 1
        JavaScript: comparação é feita por identidade case 1 === 1
      */

      switch ($parametro) {
        case false:
          echo 'Entrou no case 1';
          break;

        case 2:
          echo 'Entrou no case 2';
          break;

        case 'abc':
          echo 'Entrou no case 3';
          break;

        case true:
          echo 'Entrou no case 4';
          break;

        default:
          echo 'Entrou no default';
          break;
      }

    ?>

  </body>

</html>
