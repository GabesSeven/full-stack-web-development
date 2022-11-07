<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Orientação a Objetos</title>
  </head>

  <body>

    <?php

      try {
        echo '<h3> *** Try *** </h3>';

        // lançamento de erro
        // $sql = 'Select * from clientes';
        // mysql_query($sqk);


        if(!file_exists('require_arquivo_a.php')) {
          // throw new Error('o arquivo em questão deveria estar disponível as '  . date('d/m/y H:i:s') .  ' horas, mas não estava. Vamos seguir mesmo assim!');
          throw new Exception('o arquivo em questão deveria estar disponível as '  . date('d/m/y H:i:s') .  ' horas, mas não estava. Vamos seguir mesmo assim!');
        }

      } catch(Error $e) {

        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        // os erro podem ser armazenados em banco de dados para futura análise

      } catch(Exception $e) {

        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        // os erro podem ser armazenados em banco de dados para futura análise

      } finally {

        echo '<h3> *** Finally *** </h3>';

      }


    ?>

  </body>

</html>
