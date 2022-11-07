<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      // interfaces cria métodos homogêneos, capaz de padronizar os métodos para uma equipe grande de desenvolvedores
      interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
      }

      class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
          echo 'Abrir a porta';
        }

        public function ligar() {
          echo 'Ligar';
        }

        public function desligar() {
          echo 'Desligar';
        }
      }

      class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
          echo 'Trocar canal';
        }

        public function ligar() {
          echo 'Ligar';
        }

        public function desligar() {
          echo 'Desligar';
        }
      }

      // após implementar a interface, se os métodos não forem criados nas classes, é apontado um fatal error ao executar o código
      $x = new Geladeira();
      $y = new TV();

      //===============================================

      interface MamiferoInterface {
        public function respirar();
      }

      interface TerrestreInterface {
        public function andar();
      }

      interface AquarioInterface {
        public function nadar();
      }

      class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar() {
          echo 'Respirar';
        }

        public function andar() {
          echo 'Andar';
        }

        protected function conversar() {
          echo 'Conversar';
        }

      }

      class Baleia implements MamiferoInterface, AquarioInterface {
        public function respirar() {
          echo 'Respirar';
        }

        public function nadar() {
          echo 'Nadar';
        }

        protected function esguichar() {
          echo 'Esguichar';
        }
      }

      //===============================================

      interface AnimalInterface {
        public function comer();
      }

      interface AvelInterface extends AnimalInterface {
        public function voar();
      }

      class Papagaio implements AvelInterface {
        public function voar() {
          echo 'Voar';
        }

        public function comer() {
          echo 'Comer';
        }
      }


    ?>

  </body>

</html>
