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
         public $nome = null;
         public $telefone = null;
         public $numFilhos = null;
         public $cargo = null;
         public $salario = null;

         // getters e setters oberloadin / sobrecarga
         function __set($atributo, $valor) {
           $this->$atributo = $valor;
         }

         function __get($atributo) {
           return $this->$atributo;
         }

         /*
         function setNome($nome) {
           $this->nome = $nome;
         }

         function setTelefone($telefone) {
           $this->telefone = $telefone;
         }

         function setNumFilhos($numFilhos) {
           $this->numFilhos = $numFilhos;
         }

         function getNome() {
           return $this->nome;
         }

         function getTelefone() {
           return $this->telefone;
         }

         function getNumFilhos() {
           return $this->numFilhos;
         }
         */

         // métodos
         function resumirCadFunc() {
           return "$this->nome possui $this->numFilhos filho(s) e seu telefone é $this->telefone.";
         }

         function modificarNumFilhos($numFilhos) {
           $this->numFilhos = $numFilhos;
         }

       }

       $y = new Funcionario();
       $y->__set('nome', 'José');
       $y->__set('numFilhos', 2);
       $y->__set('telefone', '41 11111-2222');
       echo $y->resumirCadFunc();
       echo '<br />';
       // echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) e seu telefone é ' . $y->__get('telefone') . '.';

       echo '<hr />';

       $x = new Funcionario();
       $x->__set('nome', 'Maria');
       $x->__set('numFilhos', 7);
       $x->__set('telefone', '11 11111-5555');
       echo $x->resumirCadFunc();
       echo '<br />';
       // echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) e seu telefone é ' . $x->__get('telefone') . '.';

    ?>

  </body>

</html>
