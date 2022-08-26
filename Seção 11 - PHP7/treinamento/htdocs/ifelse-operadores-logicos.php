<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php
      /* operadores condicionais / comparação */
      // == (igual - somente valor)
      // === (identico - valor e tipo)
      // != ou <> (diferente - somente valor)
      // !== (não identico - valor e tipo)
      // < (menor)
      // > (maior)
      // <= (menor ou igual)
      // >= (maior ou igual)

      /* operadores lógicos */
      // AND ou && (E)
      // OR ou || (OU)
      // XOR (OU EXCLUSIVO)
      // ! (NEGAÇÃO / NOT)

      // () parenteses estabelece precedência
      if (!(2 == 2 XOR 3 == 3)) {
        echo 'Verdadeiro';
      } else {
        echo 'Falso';
      }

    ?>

  </body>

</html>
