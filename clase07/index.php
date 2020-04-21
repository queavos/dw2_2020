<?php
//echo "hola";
$titulo="clase 07";
$saludo='Bienvenidos a la clase de php';
$otro="tambien veremos algo de apache y mariadb (MySQL)";
$otro=212545123;
$otro="tambien veremos algo de apache y mariadb (MySQL) "."1";
$array=[];
//$array[0]="";
for ($i=0; $i<5; $i++)
{
  $array[$i]=rand( 1 , 100 );
}
function mifuncion()
    {
      return "soy funcion";
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
  </head>
  <body>
  <h2> <?php echo $saludo; ?></h2>
  <h3><?php echo $otro; ?></h3>

  <?php
  // if ($array[0])
  // {
  //   echo "ok";
  // } else {
  //   echo "no ok";
  // }
 // foreach ($array as $key => $elemento) {
 //   // code...
 //   echo $key." es ".$elemento."<br>";
 // }
 //echo count($array);



 $i=0;
 while ($i<count($array))
 {
echo "<p data-id='$i'>".$i." es ".$array[$i]."</p>";
$i++;
 }
   ?>
<br>
<?php
  echo $salida= mifuncion();
  //echo $salida;
 ?>



  </body>
</html>
