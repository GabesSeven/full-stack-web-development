<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>

    <?php
      // void (sem retorno)
      function exibirBoasVindas() {
        echo 'Bem-vindo ao curso de PHP!<br />';
      }

      exibirBoasVindas();

      // return (com retorno)
      function calcularAreaTerreno($largura, $comprimento) {
        return $largura * $comprimento;
      }

      echo calcularAreaTerreno(50, 30)
    ?>

    <h2>Atividade:</h2>
    <?php
      function calcularImposto($valor) {

        if ($valor <= 1903.98)
          return 0;
        else if ($valor >= 1903.99 && $valor <= 2826.65)
          return ($valor * 7.5) / 100;
        else if ($valor >= 2826.65 && $valor <= 3751.05)
          return ($valor * 15) / 100;
        else if ($valor >= 3751.06 && $valor <= 4664.68)
          return ($valor * 22.5) / 100;
        else
          return ($valor * 27.5) / 100;
      }

      echo 'o valor a ser pago é: R$' . calcularImposto(2000);

    ?>

  </body>

</html>
