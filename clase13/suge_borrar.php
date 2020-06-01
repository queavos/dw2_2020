<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if($_GET)
  {
  if ($_SESSION['administrador']==1) {
  sugerenciaBorrar($conn, $_GET["id"]);
  //sugerenciaGuardar($conn, $_POST['nombre'], $_POST['telefono'],$_POST['correo'], $_POST['sugerencias']);
  }
  }
  header('Location:index.php');
 ?>
