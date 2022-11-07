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

         // getters e setters
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

         // métodos
         function resumirCadFunc() {
           return "$this->nome possui $this->numFilhos filho(s) e seu telefone é $this->telefone.";
         }

         function modificarNumFilhos($numFilhos) {
           $this->numFilhos = $numFilhos;
         }

       }

       $y = new Funcionario();
       $y->setNome('José');
       $y->setNumFilhos(2);
       $y->setTelefone('41 11111-2222');
       echo $y->resumirCadFunc();
       echo '<br />';
       echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) e seu telefone é ' . $y->getTelefone() . '.';

       echo '<hr />';

       $x = new Funcionario();
       $x->setNome('Maria');
       $x->setNumFilhos(7);
       $x->setTelefone('11 99999-2222');
       echo $x->resumirCadFunc();
       echo '<br />';
       echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) e seu telefone é ' . $x->getTelefone() . '.';


    ?>

  </body>

</html>
