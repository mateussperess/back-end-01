<!DOCTYPE html>
<html lang="en">

<?php 
  require('produtos.php');
  session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Carrinho de Compras </title>
</head>
<body>
  <form action="adicionarCarrinho.php" method="post">
    <span> Insira o produto para adicionar ao carrinho</span> <br>

    <select name="item" id="item">
      <?php foreach ($produtos as $produto => $valor) { ?>
        <option value="<?= $produto ?>"> <?= $produto ?> </option>
      <?php } ?>
    </select>

    <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade">
    <button type="submit"> Adicionar </button>
  </form>

  <h3> Catálogo: </h3>
  
  <?php 
    foreach ($produtos as $produto => $preco) { ?>
      <li> <?= $produto; ?> - R$ <?= number_format($preco, 2, ',', '.'); ?> </li>
    <?php } 
  ?>

  <h3> Carrinho: </h3>
  <?php 
    $precoTotal = 0;
    if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
      foreach ($_SESSION['carrinho'] as $item => $quantidade) {
        $precoTotal += $produtos[$item] * $quantidade;
        ?>
        <li> 
          <?= $item ?> - Quantidade: <?= $quantidade; ?>  
        </li>
      <?php }; ?> 
      <span> Total: <?= number_format($precoTotal, 2, ',', '.'); ?> </span>
      
      <form action="limparCarrinho.php" method="post">
        <button type="submit"> Limpar carrinho </button>
      </form>
      
      <?php
    } else { ?>
      <h3> Carrinho vazio. </h3>
    <?php } 
  ?>

</body>
</html>