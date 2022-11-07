<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      require "./bibliotecas/lib1/lib1.php";
      require "./bibliotecas/lib2/lib2.php";

      // só é possível importar classes e interfaces, já constamtes não é permitido

      use B\Cliente as C1;
      use A\Cliente;

      $x = new C1();
      print_r($x);
      echo $x->__get('nome');

      echo '<hr />';

      $y = new Cliente();
      print_r($y);
      echo $y->__get('nome');


    ?>

  </body>

</html>
