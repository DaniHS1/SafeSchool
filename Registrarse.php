<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="icon" type="image/png" href="Images/LogoSF3.png" />
    <meta charset="utf-8">
    <title>SafeSchool</title>

    <!--CSS-->
    <link rel="stylesheet" href="Estilos/Login1.css">
  </head>
  <body>
    <div class="log">
      <form class=".login1" action="PHP/ConLogReg.php" method="POST">
        <h2>Registrarse</h2>
        <input type="text" name="RNombre" placeholder="Nombre" required>
        <input type="text" name="RApellidos" placeholder="Apellidos" required>
        <input type="email" name="RCorreo" placeholder="Correo" required>
        <input type="password" name="RContraseña" placeholder="Contraseña" required>
        <input type="tel" name="RTelefono" placeholder="Telefono" required>
        <input type="text" name="RDireccion" placeholder="Direccion" required>
        <input type="date" name="RFechNac" placeholder="Nacimiento" required>
        <input type="submit" value="Registrarse" id="boton" name="btnReg">
      </form>
      <div class="img">

      </div>
    </div>
    <a href="Login.php">Login</a>


  </body>
</html>
