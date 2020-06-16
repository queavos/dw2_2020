<?php
require_once("libs/conex.php");
function usuariovalidar($usuario, $contrasena, $conn)
  {
  $sql='SELECT * FROM usuarios where usuario="'.$usuario.'" and contrasena= "'.$contrasena.'" ';
  //echo $sql;
  $filas=$conn->query($sql);
  if ($filas->num_rows==1)
    {
    $d=$filas->fetch_assoc();
    $_SESSION['id']=$d['id'];
    $_SESSION['usuario']=$d['usuario'];
    $_SESSION['correo']=$d['correo'];
    $_SESSION['nombre']=$d['nombre'];
    $_SESSION['administrador']=$d['administrador'];
    }
    else {
      // code...
    }
  }
  function usuariosalir()
  {
  session_destroy();
  }


 ?>
