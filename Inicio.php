<?php
	session_start();
	if (@!$_SESSION['idUsuario']) {
		header("location:index.html");
	}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="icon" type="image/png" href="Images/LogoSF3.png" />
    <meta charset="utf-8">
    <title>SafeSchool</title>

    <!--CSS-->
    <link rel="stylesheet" href="Estilos/InicioStyle.css">
    <link rel="stylesheet" href="Estilos/HeaderStyle.css">
  	<link rel="stylesheet" href="Estilos/FooterStyle.css">

    <!--JS-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="JS/header.js"></script>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="logo">
          <img src="Images/LogoSF1.png" alt="...">
        </div>
        <nav>
          <a href="#">Inicio</a>
          <a href="#">Servicio</a>
          <a href="#">Cuenta</a>
          <a href="PHP/Logout.php">Cerrar sesión</a>
        </nav>
      </div>
    </header>
    <div class="contenido">
      <h1>Bienvenido a SafeSchool <?php echo $_SESSION['Nombre']; ?></h1>
      <section class="datos">
        <nav>
          <h2>Tus usuarios</h2>
        </nav>
        <nav>
          <h2>Agregar más usuarios</h2>
          <form class="" action="" method="POST">
            <input type="text" name="" value="" placeholder="Código">
            <button type="button" name="button">Aceptar</button>
          </form>
        </nav>
      </section>
      <nav>
        <h2>Solicitudes</h2>
      </nav>
      <br><br><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <br><br><br>

    <footer>
  		<div class="container-footer-all">

  			<div class="container-body">
  				<div class="colum1">
  					<h1>Más información de la compañia</h1>
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
  						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
  						ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
  						aliquip ex ea commodo consequat. Duis aute irure dolor in
  						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
  						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
  						culpa qui officia deserunt mollit anim id est laborum.</p>
  				</div>

  				<div class="colum2">
  					<h1> <center> Más de nosotros </center></h1>
  					<a href="index.html">
  						<div class="row">
  							<img src="https://img.icons8.com/office/40/000000/home.png" alt="...">
  							<p>Inicio</p>
  						</div>
  					</a>
  					<a href="Foro.php">
  						<div class="row">
  							<img src="https://img.icons8.com/dusk/64/000000/comments.png" alt="...">
  							<p>Foro</p>
  						</div>
  					</a>
  					<a href="AdminLog.php">
  						<div class="row">
  							<img src="https://img.icons8.com/office/80/000000/shutdown.png" alt="...">
  							<p>Cerrar sesión</p>
  						</div>
  					</a>
  				</div>

  				<div class="colum3">
  					<h1>información de contacto</h1>

  					<div class="row2">
  						<img src="https://img.icons8.com/dusk/64/000000/near-me.png" alt="...">
  						<label for="">Universidad 2, La Loma Xicohtencatl, 90070 Tlaxcala de
  							Xicohténcatl, Tlax.</label>
  					</div>
  					<div class="row2">
  						<img src="https://img.icons8.com/nolan/64/000000/phone-office.png" alt="...">
  						<label for="">+52-246-139-9508</label>
  					</div>
  					<div class="row2">
  						<img src="https://img.icons8.com/dusk/64/000000/email.png" alt="...">
  						<a href="danielhachac@gmail.com"><p>danielhachac@gmail.com</p></a>
  					</div>
  				</div>
  			</div>

  		</div>

  		<div class="container-footer">
  			<div class="footer">
  				<div class="copyright">
  					© 2019 Todos los derechos reservados | <a href="index.html">SafeSchool</a>
  				</div>

  				<div class="information">
  					<a href="#">Información de la compañia</a> |
  					<a href="https://policies.google.com/?hl=es">Privación y Politica</a> |
  					<a href="https://policies.google.com/terms?hl=es">Terminos y Condiciones
  					</a>
  				</div>
  			</div>
  		</div>
  	</footer>
  </body>
</html>