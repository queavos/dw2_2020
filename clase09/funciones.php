<?php
function set_session()
  {
    if (!isset($_SESSION['login']))
    {
      $_SESSION['login']='rechazado';
    }
  }
function acceso($username,$password)
    {
      $usuario="admin";
      $contraseña="1234567";
      if (($usuario==$username) & ($contraseña==$password) )
      {
        return true;
      } else {
         return false;
      }
    }

 ?>
