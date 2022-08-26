<?php

   session_start();

   // echo '<prev>';
   // print_r($_SESSION);
   // echo '</prev>';

   // remover índices do array de sessão
   // remove o índice apenas se existir, não aponta erro se não existir
   // unset

   // destruir a variável de sessão
   // os valores das variáveis de sessão _SESSION podem ser acessados até uma nova sessão ser inicializada
   // por isso deve-se forçar um novoredirecionamento
   // session_destroy()

   session_destroy();
   header('Location: index.php');
?>
