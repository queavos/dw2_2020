<?php
if ($_POST)
{
  //print_r($_POST);
  $errores=[];
  if ( !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL ))
  {
    array_push($errores, "email, no es una direccion de correo valida");
  }
  if ( !filter_var($_POST['email_conf'],FILTER_VALIDATE_EMAIL ))
  {
    array_push($errores, "email_conf, no es una direccion de correo valida");
  }
  if ( $_POST['email']!=$_POST['email_conf'])
  {
    array_push($errores, "email y email_conf debe ser iguales");
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Respuesta</title>
   </head>
   <body>
     <?php if (count($errores)<1) { ?>
       <table>
         <tr>
           <th>Su correo es </th>
           <td><?php echo $_POST['email']; ?></td>
         </tr>
         <tr>
           <th>Recibira publicidad? </th>
           <td><?php echo $_POST['recibir']; ?></td>
         </tr>
       </table>
     <?php } else {
       ?>
        <h4>Errores</h4>
        <ul>
        <?php foreach ($errores as $e) { ?>
          <li><?php echo $e; ?></li>
     <?php
    } ?>
    </ul>
    <?php
   } ?>
   </body>
 </html>
