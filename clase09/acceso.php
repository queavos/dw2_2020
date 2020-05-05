<?php
session_start();
require_once('funciones.php');
set_session();
  if ($_POST) {
    if (acceso($_POST['username'],$_POST['password'])) {
      $_SESSION['login']="admitido";
      header('Location: index.php');
    } else {
      $_SESSION['login']="rechazado";
      header('Location: acceso.php');
    }
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php include("titulo.php"); ?>
     <h3>Ingresar</h3>
     <?php //WSecho $_SESSION['login'] ?>
     <form action="acceso.php" method="post">
        <div class="container">
            <label>Usuario : </label>
            <input type="text" placeholder="Ingrese Usuario" name="username" required>
            <label>Password : </label>
            <input type="password" placeholder="Ingrese Password" name="password" required>
            <button type="submit">Login</button>
        </div>
    </form>
   </body>
 </html>
