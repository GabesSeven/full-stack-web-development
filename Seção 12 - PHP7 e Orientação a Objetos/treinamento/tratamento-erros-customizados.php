<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro) {
          $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada() {
          // return $this->erro;

          echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
            echo $this->erro;
          echo '</div>';
        }
      }

      try {

        //Error (php)
        //Exception (programadores)
        //Customizadas (programadores)

        // throw new Exception('Esse é um erro de teste');
        throw new MinhaExceptionCustomizada('Esse é um erro de teste');

      } /*catch (Exception $e) {*/ catch (MinhaExceptionCustomizada $e) {

        echo $e->exibirMensagemErroCustomizada();

      }


    ?>

  </body>

</html>
