<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>

  <body>
    <?php
      define('BD_URL', 'endereco_bd_dev');
      define('BD_USUARIO', 'usuario_dev');
      define('BD_SENHA', 'senha_dev');

      // define('BD_SENHA', 'senha_dev_prod');

      echo BD_URL . '<br />';
      echo BD_USUARIO . '<br />';
      echo BD_SENHA . '<br />';
    ?>
  </body>

</html>
