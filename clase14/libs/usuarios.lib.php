<?php

// crear
function crear_usuario($conn, $nombre, $usuario,$contrasena,$correo )
{
  $sql="INSERT INTO usuarios (id, nombre, usuario, contrasena, correo, administrador)
  VALUES (NULL, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',0)";
  //echo $sql;
  $filas=$conn->query($sql);
}
// modificar

// borrar

// cambiar password



 ?>
