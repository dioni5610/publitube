<?php
// Evitar los warnings de variables no definidas
$err = isset($_GET['error']) ? $_GET['error'] : null ;

@session_start();
?>

<!DOCTYPE <!DOCTYPE html>
<html>
	<head>
		<title>PubliTube</title>
		<script type="text/javascript" src="js/inicio.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/maquetaInicio.css"/>
		
		<link rel="shortcut icon" type= "image/png" href="images/favicon.png"/>

		<script type="text/javascript" src="js/manejoDOM.js"></script>
		<script language="javascript" src="js/validaciones/validacionIndex.js"></script>

		<script type="text/javascript" src="js/bootstrap-notify.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-notify.css"/>


	</head>
	<body>

	<div class="alertaInicioSesion">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>Hay campos faltantes para el inicio de sesión.</strong></div>
		</div>
	</div>

		<div class="vtnFondoN">
			<form class="form" method="post" action="index.html">
				<div class="cerrar"><a href="javascript:closeFondoNegro();"> Cierra X</a></div>
				<h1>Ha olvidado su contraseña</h1>
				<hr>
					<table>
						<tr>
							<td><input type="text" class="email" placeholder="Ingresa tu correo" name=""></td>
						</tr>
						<tr><td><hr></td></tr>
						<tr>
							<td><input type="text" class="email" placeholder="Ingresa Usuario" name=""></td>
						</tr>
						<tr><td><hr></td></tr>
					</table>
					<input type="submit" value="Enviar" name="enviaOlvido">
				</form>
		</div>




		<header>
			<div class="logo">
				<img src="images/logo.png" alt="" width="200" height="75" >
			</div>
			<br>
			<nav class="navbar navbar-default">
					<ul class="barraMenu">
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="views/quienesSomos.html" title="QuienesSomos">¿Quiénes somos?</a></li>
						<li><a href="views/terminos.html" title="terminos">Información</a></li>
						<li><a href="views/contacto.html" title="Contacto">Contacto</a></li>
						<li><a href="views/eligeRegistro.html" title="Registro">Registro</a></li>
						<li><a href="views/maquetaPreguntas.html" title="FAQ">FAQ</a></li>
					</ul>
			</nav>
		</header>
		<div class ="contenedorUno">
			<div class = "w3-content w3-display-container">
					<img class="mySlides" src="images/imgSlide1.jpg" alt="" >
				    <img class="mySlides" src="images/imgSlide2.jpg" alt="" >
				    <img class="mySlides" src="images/imgSlide3.jpeg" alt="" >
				    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  					<button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
			


			<div  class= "login">
				<form method="post" action="session_init.php" onSubmit="return comprobarLogin();">
					<?php 
						if($err==2){
							echo "Debe iniciar sesión para acceder al sitio";
						}
						if($err==3){
							echo "No tiene permiso para acceder a esa Sección";
						}
					?>
					<div class="box">
						<h1>Ingreso a PubliTube</h1>
						<input type="text" name="usuario" id="usuario" class="email" placeholder="Ingresa tu usuario"/>
						<input type="password" name="password" id="password" class="email" placeholder="Contraseña"/>
						<button class="btn" type="submit">Iniciar Sesión</button>
						<a class="btn2" href="views/eligeRegistro.html" title="Registro">Registrarse</a>

						<a class = "olvido" href="javascript:openFondoNegro();"><u>¿Olvidaste la contraseña? </u>
					</div> <!-- End Box -->
				</form>	
    		</div>
		</div>
		<br><br><br><br><br>
		<div class = "contenedorDos">
			<div class = "contEmpresa">
				<h3>¿Quiéres mayor publicidad para tu producto?</h2>
				<hr>
				<img src="images/marcas.jpg" alt=""width="200" height="150" >
				<p>Conseguimos que tu producto sea conocido de manera fácil y rápida</p>
			</div>
			<div class = "contYoutuber">
				<h3>¿Haces videos? Gana dinero con nosotros</h2>
				<hr>
				<img src="images/youtuber.jpg" alt=""width="200" height="150" >
				<p>Regístrate, Publica tu video y gana</p>
			</div>
		</div>
		<br><br><br><br>
		<div class = "contPorque">
			<h3>¿Por qué elegir PubliTube?</h2>
			<hr>
		</div>

		<div class = "contenedorTres">
			<div class ="img1">
				<img src="images/personalizado.png" alt="" width="200" height="150" >
				<p>Gran conocimiento del mercado</p>
			</div>
			<div class ="img2">
				<img src="images/experiencia.png" alt="" width="200" height="150" >
				<p>Familiaridad y compromiso con el cliente</p>
			</div>
			<div class ="img3">
				<img src="images/nacional.png" alt="" width="200" height="150" >
				<p>Red mundial para aprovechamiento del mismo</p>
			</div>
		</div>
		<br><br><br>

		<footer id="footer">
			<div class="pieUno">
				<div class ="mapaYoutuber">
					<h4>SÍGUENOS</h4>
					<hr>
						<img src="images/youtubeIcon.png" alt="" width="40" height="40">
						<img src="images/faceIcon.png" alt="" width="40" height="40">
						<img src="images/twittIcon.png" alt="" width="40" height="40">
						<img src="images/instaIcon.png" alt="" width="40" height="40">
				</div>

				<div class ="mapaSitio">
					<h4>CONTENIDO</h4>
					<hr>
						<a href="index.php">Inicio</a><br>
						<a href="views/quienesSomos.html" title="QuienesSomos">¿Quiénes somos?</a><br>
						<a href="views/terminos.html" title="terminos">Información</a><br>
						<a href="views/contacto.html" title="Contacto">Contacto</a><br>
						<a href="views/eligeRegistro.html" title="Registro">Registro</a><br>
						<a href="views/maquetaPreguntas.html" title="FAQ">FAQ</a><br>
				</div>

				<div class ="mapaEmpresa">
					<h4>LEGALIDAD</h4>
					<hr>
						<a href="views/terminos.html">Aviso de privacidad</a><br>
						<a href="views/terminos.html">Términos y condiciones</a><br>
				</div>
			</div>
			<div class = "pieDos">
				<p>© 2017 PubliTube - Publicidad empresarial por bloggeros.		Tel.12233445</p>
			</div>
		</footer>
		<script src="js/slide.js"></script>
	</body>
</html>