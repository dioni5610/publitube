<?php

//Controlando el inicio de la sesión
require'../../class/sessions.php';
$objses = new Sessions();
$objses->init();

if(isset($_SESSION['loginUsers'])){
	$nameU = $objses->get('loginUsers');
	$idUse = $objses->get('idUser');
	$idPro = $objses->get('idProfile');

	if($idPro!=3){
		$objses->destroy();
		header('Location: http://publiproyecto.hol.es/index.php?error=3');
	}



}else{
	$user = isset($nameU) ? $nameU : null;

	if($user == ''){
		header('Location: http://publiproyecto.hol.es/index.php?error=2');
	}
}

?>

<!DOCTYPE <!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<!--Plantilla Titulo-->
	<title>Tú Empresa</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/verPerfilEmpresa.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
</head>
<body>
	<!--Plantilla Cabecera-->
	<header>
		<div class="logo">
			<img src="../../images/logo.png" alt=""width="200" height="75" >
		</div>
		<br>
			<nav class="navbar navbar-default">
					<ul class="barraMenu">
						<li><a href="../../index.php" title="Inicio">Inicio</a></li>
						<li><a href="../quienesSomos.html" title="QuienesSomos">¿Quiénes somos?</a></li>
						<li><a href="../terminos.html" title="terminos">Información</a></li>
						<li><a href="../contacto.html" title="Contacto">Contacto</a></li>
						<li><a href="../eligeRegistro.html" title="Registro">Registro</a></li>
						<li><a href="../maquetaPreguntas.html" title="FAQ">FAQ</a></li>
					</ul>
			</nav>
		</header>
	<!--Cuerpo-->
	<div class="TablaEmpresas">
		<div id="DatosContacto">

			<label class="EtiquetaRegistro">Perfil Empresa</label>
			<br>
			<label class="llene">Gamesa</label>
			<hr class="SeparadorDatos">
		</div>
		<br>
	 	<form>
	  		<table id="formularioEmpresa">
		    	<tr><td>Nombre de la Empresa:</td><td><label>Gamesa</label></td></tr>
		    	<tr><td>E-mail:</td><td><label>gamesa@gmail.com</label></td></tr>
		    	<tr><td>Apellidos de Contacto:</td><td><label>García</label></td></tr>
		    	<tr><td>Nombre del Contacto:</td><td><label>Dioni</label></td></tr>
		    	<tr><td>Contraseña:</td><td><label>Contraseña123</label></td></tr>
		    	<tr><td>Telefono de contacto:</td><td><label>22 2222 22</label></td></tr>
		    	<tr><td>RFC:</td><td><label>RFC</label></td></tr>
		    	<tr><td></td><td><a class = "btn2" type="button" href="modificarPerfilEmpresa.php">Modificar</a></td></tr>
	  		</table>
		</form>
	</div>

	<!-- plantilla footer-->
		<br><br><br>

		<footer id="footer">
			<div class="pieUno">
				<div class ="mapaYoutuber">
					<h4>SÍGUENOS</h4>
					<hr>
						<img src="../../images/youtubeIcon.png" alt="" width="40" height="40">
						<img src="../../images/faceIcon.png" alt="" width="40" height="40">
						<img src="../../images/twittIcon.png" alt="" width="40" height="40">
						<img src="../../images/instaIcon.png" alt="" width="40" height="40">
				</div>

				<div class ="mapaSitio">
					<h4>CONTENIDO</h4>
					<hr>
						<a href="../../index.php">Inicio</a><br>
						<a href="../quienesSomos.html" title="QuienesSomos">¿Quiénes somos?</a><br>
						<a href="../terminos.html" title="terminos">Información</a><br>
						<a href="../contacto.html" title="Contacto">Contacto</a><br>
						<a href="../eligeRegistro.html" title="Registro">Registro</a><br>
						<a href="../maquetaPreguntas.html" title="FAQ">FAQ</a><br>
				</div>

				<div class ="mapaEmpresa">
					<h4>LEGALIDAD</h4>
					<hr>
						<a href="../terminos.html">Aviso de privacidad</a><br>
						<a href="../terminos.html">Términos y condiciones</a><br>
				</div>
			</div>
			<div class = "pieDos">
				<p>© 2017 PubliTube - Publicidad empresarial por bloggeros.		Tel.12233445</p>
			</div>
		</footer>
	</body>
</html>