<?php
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/sugerencias.lib.php");
$datos=suegrerenciasTodo($conn);
// foreach ($datos as $dato) {
// print_r($dato);
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php //include("navbar.php");
  //  print_r($_SESSION);
    ?>
    <div class="container">

        <div class="alert  <?php if ($_GET['tipo']=="error") { echo "alert-danger"; } elseif ($_GET['tipo']=="exito") {
          echo "alert-success";
        } else {  echo "alert-warning"; }   ?>" role="alert">
          <?php if ($_GET['mensaje']) { ?>
        <ul>
          <li><?php echo $_GET['mensaje']  ?></li>
        </ul>
      </div>
      <?php } ?>
      <div class="row">

      <aside class=" col-3">
        <?php
         if (isset($_SESSION['correo']))
         {
           include('v_perfil.php');
         }
         else
         {
          include('f_login.php');
         }

         ?>
      </aside>

      <div class="  col-9">
        <?php foreach ($datos as $dato) { ?>
        <div class="card">
          <div class="card-header" >
          <?php
          if ($_SESSION){
            if ($_SESSION['administrador']==1 || $_SESSION['id']==$dato['usuario_id']) { ?>
          <a href="suge_borrar.php?id=<?php echo $dato['id']; ?>" class="btn btn-danger">Borrar</a>
          <a href="f_sugerencias.php?id=<?php echo $dato['id']; ?>" class="btn btn-warning">Editar</a>
          <?php } } ?>
           <?php echo $dato['nombre']; ?> dice:
          </div>
            <div class="card-body">
                <?php echo $dato['sugerencias']; ?>
            </div>
            </div>

      <?php }  ?>
    </div>

      </div>

  </div>
<div class="container">
  <?php
  if (isset($_SESSION['correo']))
  {
    include('f_sugerencias.php');
  } else { ?>
 <p class="alert alert-warning" role="alert">debe <a href="#f_login">ingresar</a> o  <a href="f_registro.php">registrarse</a> para escribir una sugerencia</p>
    <?php
  }
   ?>
</div>


  </body>
</html>
