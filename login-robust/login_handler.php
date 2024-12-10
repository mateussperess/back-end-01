<?php

include('db_usuarios.php');
include('auth.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(checarUsuario($usuario, $senha, $array_usuarios)) {
  session_start();
  $_SESSION['usuario'] = $usuario;
  header("Location: perfil.php");
  exit();
} else {
  header("Location: login.php?erro=1"); 
}