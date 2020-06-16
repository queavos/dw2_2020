<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if($_POST)
  {
  if (!$_POST['id'])
  {
  //echo "no id";
  sugerenciaAgregar($conn,$_POST['telefono'], $_POST['sugerencias']);
  $mtipo="exito";
  $mensaje="se ha procesado correctamente";
  $url="index.php?mensaje=".$mensaje."&tipo=".$mtipo="exito";
  header("Location:$url");
  }
  else
  {
  $sugerencia=sugerenciaTraerId($conn, $_POST['id']);
 if ($_SESSION['administrador']==1 || $_SESSION['id']==$sugerencia['usuario_id'])
   {
  sugerenciaModificar($conn,$_POST['telefono'], $_POST['sugerencias'],$_POST['id'] );
  $mtipo="exito";
  $mensaje="se ha procesado correctamente";
  $url="index.php?mensaje=".$mensaje."&tipo=".$mtipo="exito";
  header("Location:$url");

} else
  {
    $mtipo="error";
    $mensaje="no tiene permiso para realizar la operacion";
    $url="index.php?mensaje=".$mensaje."&tipo=".$mtipo="error";
    header("Location:$url");
  }
  }
}
 ?>
