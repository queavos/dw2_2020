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
    <?php include("navbar.php"); ?>
    <div class="container">
      <?php foreach ($datos as $dato) { ?>
      <div class="card">
        <div class="card-header" >
        <?php if ($_SESSION['administrador']==1) { ?>
        <a href="suge_borrar.php?id=<?php echo $dato['id']; ?>">Borrar</a>
        <?php } ?>
         <?php echo $dato['nombre']; ?> dice:
        </div>
          <div class="card-body">
              <?php echo $dato['sugerencias']; ?>
          </div>
      </div>
    <?php } ?>

    <div class="card">
      <div class="card-header card text-white bg-primary">
        Agregue sugerencia
      </div>
        <div class="card-body">
          <form class="" action="procesar.php" method="post">
            <input type="text" name="nombre" value="" class="form-control" placeholder="Ingrese el nombre"> <br>
            <input type="text" name="telefono" value="" class="form-control" placeholder="Ingrese el telefono"> <br>
            <input type="text" name="correo" value="" class="form-control"  placeholder="Ingrese el correo"> <br>
            <textarea name="sugerencias" rows="8" cols="80" class="form-control"  placeholder="Ingrese su sugerencia"></textarea>
            <br>
            <button type="submit" name="button" class="form-control">Enviar</button>
          </form>

        </div>
          </div>
  </body>
</html>
