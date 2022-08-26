<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php
      // string
      $nome = 'Gabriel';

      // int
      $idade = 29;

      // float
      $peso = 82.5;

      // boolena (true = 1 | false = 0)
      $fumante_sn = true;
    ?>

    <h1>Ficha cadastral: </h1>
    <br />
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
  </body>

</html>
