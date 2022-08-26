<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      // arrays sequenciais (numéricos)
      // $lista_fruta = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
      $lista_fruta = ['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];
      $lista_fruta[] = 'Abacaxi';


      // funções nativas para fazer impressão no brownser
      echo '<pre>';
        var_dump($lista_fruta);
      echo '</pre>';
      echo '<hr />';
      echo '<pre>';
        print_r($lista_fruta);
      echo '</pre>';


      echo '<hr />';
      echo $lista_fruta[2];


      echo '<hr />';


      // arrays associativos
      /*$lista_fruta_2 = array(
        'a' => 'Banana',
        'b' => 'Maça',
        'x' => 'Morango',
        'z' => 'Uva',
        '2' => 'Abacate'
      );*/

      $lista_fruta_2 = [
        'a' => 'Banana',
        'b' => 'Maça',
        'x' => 'Morango',
        'z' => 'Uva',
        '2' => 'Abacate'
      ];


      $lista_fruta_2['w'] = 'Abacaxi';
      echo '<pre>';
        echo var_dump($lista_fruta_2);
      echo '</pre>';

      echo '<hr />';
      echo $lista_fruta_2['w'];
    ?>

  </body>

</html>
