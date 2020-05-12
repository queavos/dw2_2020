<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Datos Personales</h3>
    <form class="" action="process.php" method="post">
      <p>
      <label for="email">Indique su dirección de correo:</label>
      <input type="text" name="email" value="">
    </p>
      <p>
      <label for="email_conf">Indique su dirección de correo:</label>
      <input type="text" name="email_conf" value="">
    </p>
      <p>
        <select class="" name="recibir">
            <option value="si">Recibe</option>
            <option value="no">No Recibe</option>
        </select>
      </p>
    <button type="submit" name="enviar">Enviar</button>
    </form>
  </body>
</html>
