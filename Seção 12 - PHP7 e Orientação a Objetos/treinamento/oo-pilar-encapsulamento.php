<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // regras de negócio para modificar métodos public
        /*
        public function getNome() {
          return $this->nome;
        }

        public function setNome($value) {
          if(strlen($value) >= 3) {
            $this->nome = $value;
          }
        }
        */

        // regras de negócio para modificar métodos protected
        /*
        public function getSobrenome() {
          return $this->nome;
        }

        public function setSobrenome($value) {
          if(strlen($value) >= 3) {
            $this->nome = $value;
          }
        }
        */

        // métodos mágicos getters e setters acessam diretamente atributos private e protected

        public function __get($attr) {
          return $this->$attr;
        }

        public function __set($attr, $value) {
          $this->$attr = $value;
        }

        private function executarMania() {
          echo 'Assobiar';
        }

        protected function responder() {
          echo 'oi';
        }

        public function executarAcao() {
          $count = 10;
          while ($count != 0) {
            $x = rand(1, 10);
            if($x >= 1 && $x <= 8) {
              $this->responder();
            } else {
              $this->executarMania();
            }
            echo '<br />';
            $count--;
          }

        }
      }

      class Filho extends Pai {
        /*
        public function getAtributo($attr) {
          return $this->$attr;
        }

        public function setAtributo($attr, $value) {
          $this->$attr = $value;
        }
        */
        public function __construct() {
          // exibir os métodos do objeto
          echo '<pre>';
          print_r(get_class_methods($this));
          echo '</pre>';
        }

        private function executarMania() {
          echo 'Cantar';
        }

        // método private da classe Pai NÃO É SOBREPOSTO
        public function x() {
          $this->executarMania();
        }

        // método protected É SOBREPOSTO
        protected function responder() {
          echo 'olá';
        }
      }

      // $pai = new Pai();

      // public
      /*
      echo $pai->humor;
      $pai->humor = 'Triste';
      echo '<br />';
      echo $pai->humor;
      */
      /*
      echo $pai->getNome();
      $pai->setNome('');
      $pai->setNome('Jamilton');
      echo '<br />';
      echo $pai->getNome();
      */
      /*echo $pai->nome;
      echo $pai->sobrenome;
      $pai->nome = 'Ricardo';
      $pai->sobrenome = 'Oliveira';
      echo '<br />';
      echo $pai->nome;
      echo $pai->sobrenome;
      */
      // $pai->executarAcao();

      // echo '<hr />';

      // private
      // echo $pai->nome;
      // $pai->executarMania();

      // echo '<hr />';

      // protected
      /*
      echo $pai->getSobrenome();
      $pai->setSobrenome('');
      $pai->setSobrenome('Vieira');
      echo '<br />';
      echo $pai->getSobrenome();
      */
      // $pai->responder();

      $filho = new Filho();
      echo '<pre>';
      print_r($filho);
      echo '</pre>';
      /*
      echo '<br />';
      echo $filho->getAtributo('humor');
      $filho->setAtributo('humor', 'Triste');
      echo '<br />';
      echo $filho->getAtributo('humor');

      echo '<br />';
      echo '<br />';

      echo $filho->getAtributo('sobrenome');
      $filho->setAtributo('sobrenome', 'Oliveira');
      echo '<br />';
      echo $filho->getAtributo('sobrenome');

      echo '<br />';
      echo '<br />';
      */
      // operador this da função setAtributo CRIARÁ UM ATRIBUTO com o mesmo nome do atributo da classe pai
      /*
      echo '<br />';
      echo $filho->getAtributo('nome');
      $filho->setAtributo('nome', 'Gustavo');
      echo '<br />';
      echo $filho->getAtributo('nome');

      echo '<pre>';
      print_r($filho);
      echo '</pre>';
      */

      // exibir os métodos do objetos
      echo '<pre>';
      print_r(get_class_methods($filho));
      echo '</pre>';
      /*
      echo '<br />';
      echo $filho->__get('humor');
      echo '<br />';
      echo $filho->__get('sobrenome');
      echo '<br />';
      echo $filho->__get('nome');
      */
      /*
      echo $filho->__get('nome');

      $filho->__set('nome', 'Jamilton');
      echo '<br />';
      echo $filho->__get('nome');

      echo '<pre>';
      print_r($filho);
      echo '</pre>';
      */

      $filho->executarAcao();
      echo '<br />';
      $filho->x();

      echo '<br />';
      echo '<br />';


    ?>

  </body>

</html>
