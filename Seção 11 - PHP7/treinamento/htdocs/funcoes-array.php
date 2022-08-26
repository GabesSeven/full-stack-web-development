<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      // is_array(): verifica se é um array
      /*
      $array = array('notebook', 'teclado');
      $retorno = is_array($array);

      if($retorno)
        echo 'Sim, é um array';
      else
        echo 'Não, não é um array';
      */

      echo '<hr />';

      // array_keys(): todas as chaves do array
      /*
      $array = [1 => 'a', 7 => 'b', 18 => 'c'];
      echo '<pre>';
        print_r($array);
      echo '</pre>';

      $chaves_array = array_keys($array);
      echo '<pre>';
        print_r($chaves_array);
      echo '</pre>';
      */

      echo '<hr />';

      // sort(): ordena um array e reordena seus índices
      // atua sobre o próprio array
      // retorna 1 se conseguiu ordenar
      // retorna 0 se NÃO conseguiu ordenar
     /*
      $array = array('mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook', 'teclado');
      echo '<pre>';
        print_r($array);
      echo '</pre>';

      sort($array);
      echo '<pre>';
        print_r($array);
      echo '</pre>';
      */

      echo '<hr />';

      // asort(): ordena um array e NÃO reordena seus índices
      // atua sobre o próprio array, mas MANTÉM OS ÍNDICES
      // retorna 1 se conseguiu ordenar
      // retorna 0 se NÃO conseguiu ordenar
      /*
      $array = array('mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook', 'teclado');
      echo '<pre>';
        print_r($array);
      echo '</pre>';

      asort($array);
      echo '<pre>';
        print_r($array);
      echo '</pre>';
      */

      echo '<hr />';

      // count(): conta quantidades de elementos
      /*
      $array = array('mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook', 'teclado');
      echo '<pre>';
        print_r($array);
        echo '<br />' . count($array);
      echo '</pre>';
      */

      echo '<hr />';

      // array_merge(): funde um ou mais arrays
      /*
      $array1 = ['osx', 'windows'];
      $array2 = array('linux');
      $array3 = ['solaris'];

      $novo_array = array_merge($array1, $array2, $array3);
      echo '<pre>';
        print_r($novo_array);
      echo '</pre>';
      */

      echo '<hr />';

      // explode(): divide uma string baseada em um delimitador
      /*
      $string = '26/04/2018';
      $array_retorno = explode('/', $string);
      echo '<pre>';
        echo $string . '<br />';
        print_r($array_retorno);
        echo '<br />' . $array_retorno[0] . ' - ' . $array_retorno[1] . ' - ' . $array_retorno[2];
      echo '</pre>';
      */


      echo '<hr />';

      // implode(): junta elementos de um array numa string
      $array = ['a', 'b', 'x', 'y'];
      $array_retorno = implode(',', $array);
      echo $array_retorno;
    ?>

  </body>

</html>
