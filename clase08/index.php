<?php
session_start();
//echo $_COOKIE['PHPSESSID'];

if (!$_SESSION['datos'])
{
  $_SESSION['datos']=[];
  setcookie("saludo","tu session a iniciado");
}
$nombre="";
$apellido="";
// if ($_GET)
// {
//   print_r($_GET);
//   $nombre=$_GET['nombre'];
//   $apellido=$_GET['apellido'];
//  $lista=[1,2,3,4];
// }
 if ($_POST)
{
   //print_r($_POST);
   array_push($_SESSION['datos'],
   [
     "nombre"=> $_POST['nombre'],
     "apellido"=> $_POST['apellido']
    ] );
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 08</title>
  </head>
  <body>
    <h1>Formularios con PHP</h1>
    <div id="formulario">
      <form class="" action="index.php" method="post">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="apellido" value="" placeholder="Apellido">
       <button type="submit" name="button">Enviar</button>
      </form>
      <a href="index.php?nombre=jose&apellido=jara">Saludar</a>
      <p>
        Hola <?php echo $nombre; ?> <?php echo $apellido; ?>
      </p>
      <ol>
<?php //print_r($_SESSION);
$datos=$_SESSION['datos'];

//print_r($_SESSION['datos']);
foreach ($datos as $key => $value) {
  echo "<li>".$value['apellido'].", ".$value['nombre']."</li>";
}

?>
</ol>
<a href="cerrar.php">Cerrar Session</a>
    </div>
  </body>
</html>
