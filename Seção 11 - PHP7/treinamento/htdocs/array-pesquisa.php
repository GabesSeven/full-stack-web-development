<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      /*
        Método de pesquisa em array:

          // retorna true ou false para a existência do que está sendo procurado
          in_array()
          true: 1
          false: vazio

          // retorna o índice do valor procurado, caso ele exista
          array_search()
          true: índice
          null
      */

      $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

      echo '<pre>';
        print_r($lista_frutas);
      echo '</prev>';

      echo '<hr />';
      echo in_array('Maça', $lista_frutas);
      echo '<br />';
      echo in_array('Pera', $lista_frutas);
      echo '<br />';
      $existe = in_array('Abacate', $lista_frutas);

      if($existe)
        echo 'Sim, o valor pesquisado existe no array';
      else
        echo 'Não, o valor pesquisado NÃO existe no array';


      echo '<hr />';
      echo array_search('Uva', $lista_frutas);
      echo '<br />';
      echo array_search('Kiwi', $lista_frutas);
      echo '<br />';
      $existe_2 = in_array('Abacate', $lista_frutas);

      if($existe_2)
        echo 'Sim, o valor pesquisado existe no array';
      else
        echo 'Não, o valor pesquisado NÃO existe no array';


      echo '<hr />';
      $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
      ];

      echo '<pre>';
        print_r($lista_coisas);
      echo '</pre>';

      echo '<hr />';
      echo in_array('Uva', $lista_coisas['frutas'])


    ?>

  </body>

</html>
