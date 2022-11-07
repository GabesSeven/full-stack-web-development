<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      namespace A;

      class Cliente implements \B\CadastroInterface {
        public $nome = 'Jorge';

        public function __construct() {
          echo '<pre>';
          print_r(get_class_methods($this));
          echo '</pre>';
        }

        public function __get($attr) {
          return $this->$attr;
        }

        public function salvar() {
          echo 'Salvar';
        }

        public function remover() {
          echo 'Salvar';
        }
      }

      interface CadastroInterface {
        public function salvar();
      }

      namespace B;

      class Cliente implements \A\CadastroInterface {
        public $nome = 'Jamilton';

        public function __construct() {
          echo '<pre>';
          print_r(get_class_methods($this));
          echo '</pre>';
        }

        public function __get($attr) {
          return $this->$attr;
        }

        public function remover() {
          echo 'Salvar';
        }

        public function salvar() {
          echo 'Salvar';
        }
      }

      interface CadastroInterface {
        public function remover();
      }

      $c = new \A\Cliente();
      print_r($c);
      echo $c->__get('nome');

    ?>

  </body>

</html>
