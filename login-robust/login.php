<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login </title>
</head>
<body>
  <form action="login_handler.php" method="post">
    <input type="text" name="usuario" id="usuario" placeholder="Usuário">
    <input type="password" name="senha" id="senha" placeholder="Senha">
    <input type="submit" value="Login">

    <?php if(isset($_GET['erro']) && $_GET['erro'] == 1) { ?>
      <p> Usuário ou senha incorretos! Tente novamente. </p>  
    <?php }; ?>
  </form>
</body>
</html>