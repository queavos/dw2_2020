<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
if($_POST)
  {
  usuariovalidar($_POST['usuario'],$_POST['contrasena'], $conn);
  //sugerenciaGuardar($conn, $_POST['nombre'], $_POST['telefono'],$_POST['correo'], $_POST['sugerencias']);
  }
  header('Location:index.php');
 ?>
