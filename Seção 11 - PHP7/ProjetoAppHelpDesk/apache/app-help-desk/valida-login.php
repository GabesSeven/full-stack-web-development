
<?php

  //iniciando seção
  session_start();
  // $_SESSION['x'] = 'Oi, sou um valor de sessão!';
  // print_r($_SESSION);
  // echo '<hr />';

  // variavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;
  $usuario_id = null;
  $usuario_perfil_id = null;

  $perfis = array(1 => 'Administrativo', 2 => 'Usuario');

  //usuários do sistema
  $usuario_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
  );

  /*
  echo '<pre>';
  print_r($usuario_app);
  echo '</ pre>';
  */

  foreach ($usuario_app as $user) {

    // echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
    // echo '<br>';
    // echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];
    // echo '<hr>';

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $usuario_autenticado = true;
      $usuario_id = $user['id'];
      $usuario_perfil_id = $user['perfil_id'];
      // print_r($user);
    }
  }

  if($usuario_autenticado) {
    // echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    // $_SESSION['x'] = 'um valor';
    // $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
  } else {
    // echo 'Erro na autenticação do usuário'
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
  }

  // echo 'Oiiii, estamos aqui!!'

  // mostra os parâmetros na URL
  // print_r($_GET);
  // echo '<br />';
  // echo $_GET['email'];
  // echo '<br />';
  // echo $_GET['senha'];

  // NÃO mostra os parâmetros na URL
  // print_r($_POST);
  // echo '<br />';
  // echo $_POST['email'];
  // echo '<br />';
  // echo $_POST['senha'];
?>
