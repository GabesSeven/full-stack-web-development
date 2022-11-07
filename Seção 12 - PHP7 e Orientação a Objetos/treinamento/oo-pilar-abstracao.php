<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

       // modelo
       class Funcionario {

         //atributos
         public $nome = 'José';
         public $telefone = '11 99999-8888';
         public $numFilhos = 2;

         // métodos
         function resumirCadFunc() {
           return "$this->nome possui $this->numFilhos filho(s)";
         }

         function modificarNumFilhos($numFilhos) {
           $this->numFilhos = $numFilhos;
         }

       }

       $y = new Funcionario();
       echo $y->resumirCadFunc();
       echo '<br />';
       $y->modificarNumFilhos(3);
       echo $y->resumirCadFunc();

       echo '<hr />';

       $x = new Funcionario();
       echo $x->resumirCadFunc();
       echo '<br />';
       $x->modificarNumFilhos(1);
       echo $x->resumirCadFunc();


    ?>

  </body>

</html>
