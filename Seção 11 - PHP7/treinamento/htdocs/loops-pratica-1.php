<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      /*
      $registros = array('Título notícia 1', 'Título notícia 2', 'Título notícia 3');

      $idx = 0;
      while($idx < 3) {
        echo $registros[$idx];
        echo '<hr />';

        $idx++;
      }
      */

      $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
      );


      echo '<pre>';
        print_r($registros);
      echo '</pre>';
      echo '<br /><br /><hr />';


      // $idx = 0;
      echo 'O array possui: ' . count($registros) . ' registros';
      echo '<br />';


      while($idx < count($registros)) {
        // print_r($registros[$idx]);
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';

        $idx++;
      }

      /*
      do{
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';

        $idx++;
      }while($idx < count($registros));
      */

      for ($idx = 0; $idx < count($registros); $idx++){
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr />';
      }

    ?>

  </body>

</html>
