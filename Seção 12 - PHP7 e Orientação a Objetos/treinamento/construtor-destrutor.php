<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

       class Pessoa {

         public $nome = null;

         function __construct($nome) {
           echo 'Objeto iniciado';
           $this->nome = $nome;
         }

         function __destruct() {
           echo 'Objeto removido';
         }

         function __get($atributo) {
           return $this->$atributo;
         }

         function correr() {
           return $this->__get('nome') . ' está correndo';
         }
      }

      $pessoa = new Pessoa('Jorge');
      echo '<br />Nome: ' . $pessoa->__get('nome');
      echo '<br />' . $pessoa->correr();

      echo '<br />';
      // destruindo objeto de forma proposital
      // quando finaliza a aplicação (o código), o anset() também é executado
      unset($pessoa);


    ?>

  </body>

</html>
