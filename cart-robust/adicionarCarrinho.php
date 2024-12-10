<?php
include('produtos.php');

session_start();

if(!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = [];
}

$item = $_POST['item'];
$quantidade = $_POST['quantidade'];

if(!isset($produtos[$item])) {
  echo 'produto nao existe no catalogo!';

} elseif ($quantidade <= 0) {
  echo 'voce precisa inserir uma quantidade valida!';
} else {
  if(isset($_SESSION['carrinho'][$item])) {
    $_SESSION['carrinho'][$item] += $quantidade;
    header('Location: adicionar.php');
  } else {
    $_SESSION['carrinho'][$item] = $quantidade;
    header('Location: adicionar.php');
  }

  echo 'produto adicionado ao carrinho...';

}

?>