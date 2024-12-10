<?php

include('db_usuarios.php');
function checarUsuario(string $usuario, string $senha, array $usuarios): bool {

  if (!isset($usuarios[$usuario]) || !password_verify($senha, $usuarios[$usuario])) {
    return false;
  } else {
    return true;
  }
}
  