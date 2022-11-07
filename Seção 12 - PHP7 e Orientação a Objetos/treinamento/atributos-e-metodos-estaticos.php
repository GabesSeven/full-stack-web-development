<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
          // echo $this->atributo2;
          echo 'Eu sou um método estático';
        }

        public function metodo2() {
          echo 'Eu sou um método normal';
        }
      }

      // não é necessário instânciar um objeto para usar métodos ou atributos static
      $x = new Exemplo();

      // basta usar o operador resolução de escopo (::)
      /*
      echo Exemplo::$atributo1;
      echo '<br />';
      echo Exemplo::metodo1();
      */
      /*
      echo Exemplo::$atributo2;
      echo '<br />';
      echo Exemplo::metodo2();
      */
      // echo $x->atributo1;
      echo Exemplo::metodo1();




    ?>

  </body>

</html>
