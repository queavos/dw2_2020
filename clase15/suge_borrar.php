<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if($_GET["id"])
  {
    $item=sugerenciaTraerId($conn, $_GET["id"]);
    if ($_SESSION['administrador']==1 || $item['usuario_id']==$_SESSION['id'] ) {
      sugerenciaBorrar($conn, $_GET["id"]);
      $mtipo="exito";
      $mensaje="se ha procesado correctamente";
      $url="index.php?mensaje=".$mensaje."&tipo=".$mtipo="exito";
      header("Location:$url");
    }
    else
    {
      $mtipo="error";
      $mensaje="no tiene permiso para realizar la operacion";
      $url="index.php?mensaje=".$mensaje."&tipo=".$mtipo="error";
      header("Location:$url");
    }

  }

 ?>
