<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if($_GET)
  {
  $item=sugerenciaTraerId($conn, $_GET["id"]);
    //print_r($item);
  if ($_SESSION['administrador']==1 || $item['usuario_id']==$_SESSION['id'] ) {
  sugerenciaBorrar($conn, $_GET["id"]);
  }
  }
  header('Location:index.php');
 ?>
