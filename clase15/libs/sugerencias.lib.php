<?php
function suegrerenciasTodo($conn)
  {
  $sql="select * from sugerencias";
  $filas=$conn->query($sql);
  //echo "<pre>";
  return $filas;
  }
function sugerenciaAgregar($conn, $telefono,$sugerencias)
    {
      $sql="INSERT INTO sugerencias (id, nombre, telefono, correo, sugerencias,usuario_id)
      VALUES (NULL, '".$_SESSION['nombre']."', '".$telefono."', '".$_SESSION['correo']."', '".$sugerencias."',".$_SESSION['id'].")";
      //echo $sql;
      $filas=$conn->query($sql);
    }
  function sugerenciaModificar($conn,$telefono, $sugerencias,$id )
    {
      $sql="UPDATE sugerencias SET telefono= '".$telefono."', sugerencias='".$sugerencias."' WHERE id=".$id;
      $filas=$conn->query($sql);
    }

function sugerenciaBorrar($conn, $id)
  {
    $sql="DELETE FROM sugerencias WHERE id =".$id;
    $filas=$conn->query($sql);
    //print_r($filas);
  }
  function sugerenciaTraerId($conn, $id)
    {
    $sql="select * FROM sugerencias WHERE id =".$id;
    $filas=$conn->query($sql);
    return $filas->fetch_assoc();
    }
 ?>
