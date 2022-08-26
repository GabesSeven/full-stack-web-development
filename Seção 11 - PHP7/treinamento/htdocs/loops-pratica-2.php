<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php

      // $funcionarios = array('João', 'Maria', 'Júlia');
      $funcionarios = array(
        array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '16/05/2006'),
        array('nome' => 'Maria', 'salario' => 3000),
        array('nome' => 'Júlia', 'salario' => 2200),
      );

      echo '<pre>';
        print_r($funcionarios);
      echo '</pre>';

      /*
      foreach ($funcionarios as $idx => $nome_funcionario) {
        echo "ID: $idx <br /> NOME: $nome_funcionario <br /><br />";
      }
      */

      foreach ($funcionarios as $idx => $funcionario) {
          // print_r($funcionario);
          foreach($funcionario as $idx2 =>$valor) {
            echo "ID: $idx2 <br /> VALOR: $valor <br />";
          }
          echo '<hr />';
      }

    ?>

    <h2>Atividade:</h2>

    <?php
       $num = array();

       while(count($num) <= 5) {
         $num_rand = rand(1, 60);
         if(!in_array($num_rand, $num))
           $num[] = $num_rand;
       }

       echo '<pre>';
         print_r($num);
       echo '</pre>';
    ?>

  </body>

</html>
