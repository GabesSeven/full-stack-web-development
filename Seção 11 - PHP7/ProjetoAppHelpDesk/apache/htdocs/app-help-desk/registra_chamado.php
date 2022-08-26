<?php
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';

  // $texto = $_POST['titulo'] . $_POST['categoria'] . $_POST['descricao'];
  // echo $texto;

  session_start();
  // tratando o delimitador #
  // implode('#'. $_POST);
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
  // echo $texto;

  // abrindo arquivo
  $arquivo = fopen('../../app-help-desk/arquivo.hd', 'a');
  // escrevendo arquivo
  fwrite($arquivo, $texto);
  // fechando arquivo
  fclose($arquivo);

  header('Location: abrir_chamado.php');


?>
