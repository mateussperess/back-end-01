<?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
  } else {
    echo 'Olá ' . htmlspecialchars($_SESSION['usuario']) . '! Bom te ver novamente! <br>';
    ?>
    <form action="deslogar.php" method="post">
      <input type="submit" value="deslogar">
    </form>
    <?php
  }
?>

