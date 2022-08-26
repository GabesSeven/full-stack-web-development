<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php

      $usuario_possui_cartao_loja = true;
      $valor_compra = 20;

      $valor_frete = 50;
      $recebeu_desconto_frete = true;

      /*
        OPERADORES TERNÁRIOS são usados quando dá condição retorna somente uma instrução
        Há com encadear OPERADORES TERNÁRIOS

        <condicao> ? SE VERDADEIRO : SE FALSO
      */

      /*
      if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
        $valor_frete = 0;
      } else if($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
      } else if($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 25;
      } else {
        $recebeu_desconto_frete = false;
      }
      */

      // $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 :
      // ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 :
      // ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 :
      // $valor_frete));

      $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

      $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

      $valor_frete = $valor_frete_aux;
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?></p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
        <!-- <?php
          $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
          echo $teste;
        ?> -->
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

    <br><br>
    <hr><hr>
    <br><br>

    <h1>Atividade:</h1>

    <?php
      $idade = 16;
      $peso = 60;

      $doar_sangue = $idade >= 16 && $idade <= 69 && $peso > 50 ? true : false;
    ?>

    <h2>Resultado:</h1>
      <p><b>Idade:</b> <?= $idade ?></p>
      <p><b>Peso:</b> <?= $peso ?></p>
      <p><b>Pode doar sangue:</b> <?= $doar_sangue ? 'SIM' : 'NÃO' ?></p>

  </body>

</html>
