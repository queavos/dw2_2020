<?php

function suegrerenciasTodo($conn)
{
  $sql="select * from sugerencias";
  $filas=$conn->query($sql);
  //echo "<pre>";
  return $filas;
}
function sugerenciaGuardar($conn, $nombre, $telefono, $correo, $sugerencias)
    {
      $sql="INSERT INTO sugerencias (id, nombre, telefono, correo, sugerencias)
      VALUES (NULL, '".$nombre."', '".$telefono."', '".$correo."', '".$sugerencias."')";
      //echo $sql;
      $filas=$conn->query($sql);
    }
function sugerenciaBorrar($conn, $id)
  {
    $sql="DELETE FROM sugerencias WHERE id =".$id;
    $filas=$conn->query($sql);
    print_r($filas);
  }
 ?>
