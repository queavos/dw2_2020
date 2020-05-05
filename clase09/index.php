<?php
session_start();
//echo $_COOKIE['PHPSESSID'];
require_once('funciones.php');
//require_once('acceso.php');
set_session();
if ($_SESSION['login']!="admitido") {
    //header('Location: acceso.php');
}


if (!$_SESSION['datos'])
{
  $_SESSION['datos']=[];
  setcookie("saludo","tu session a iniciado");
}
$nombre="";
$apellido="";
$in_nombre="";
$in_apellido="";
$in_id="";
// if ($_GET)
// {
//   print_r($_GET);
//   $nombre=$_GET['nombre'];
//   $apellido=$_GET['apellido'];
//  $lista=[1,2,3,4];
// }
if ($_GET) {
  if ($_GET['accion']=='editar') {
    $in_nombre=$_SESSION['datos'][$_GET['id']]['nombre'];
    $in_apellido=$_SESSION['datos'][$_GET['id']]['apellido'];
    $in_id=$_GET['id'];
  }
  if ($_GET['accion']='borrar') {
     unset($_SESSION['datos'][$_GET['id']]);
  }
}


 if ($_POST)
{
   //print_r($_POST);
   if (($_POST['id']!=""))
   {
    $_SESSION['datos'][$_POST['id']]['nombre']=$_POST['nombre'];
    $_SESSION['datos'][$_POST['id']]['apellido']=$_POST['apellido'];
   }
   else
   {
   array_push($_SESSION['datos'],
   [
     "nombre"=> $_POST['nombre'],
     "apellido"=> $_POST['apellido']
    ] );
    }
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 09</title>
  </head>
  <body>
    <?php include("titulo.php"); ?>
    <ul>
      <li><a href="acceso.php">Ingresar</a>
      </li>
    </ul>
    <pre>
      <?php
      // print_r($_SESSION);
       ?>
    </pre>
    <h1>Formularios con PHP</h1>
    <div id="formulario">
      <form class="" action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $in_id; ?>">
        <input type="text" name="nombre" value="<?php echo $in_nombre; ?>" placeholder="Nombre">
        <input type="text" name="apellido" value="<?php echo $in_apellido; ?>" placeholder="Apellido">
<?php  if ($_SESSION['login']=="admitido") { ?>
       <button type="submit" name="button">Enviar</button>
    <?php } ?>
      </form>
      <a href="index.php?nombre=jose&apellido=jara">Saludar</a>
      <p>
        Hola <?php echo $nombre; ?> <?php echo $apellido; ?>
      </p>

<table>
  <thead>
    <th>Apellido</th>
    <th>Nombre</th>
    <th colspan="2"><a href='index.php'>Nuevo</a></th>
  </thead>
<tbody>

<?php
$datos=$_SESSION['datos'];
foreach ($datos as $key => $value) { ?>
  <tr>
      <td><?php echo $value['apellido']; ?></td>
      <td><?php echo $value['nombre']; ?></td>
    <?php  if ($_SESSION['login']=="admitido") { ?>
      <td><a href="index.php?accion=editar&id=<?php echo $key; ?>">Editar</a></td>
      <td><a href='index.php?accion=borrar&id=<?php echo $key; ?>'>Borrar</a></td>
    <?php } ?>
  </tr>;
  <?php } ?>

</tbody>
</table>
<a href="cerrar.php">Cerrar Session</a>
    </div>
  </body>
</html>
