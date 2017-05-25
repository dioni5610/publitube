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
	<title>Lista de Youtubers</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/listadoYoutubersEmpresa.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
	<script src="../../js/localStorageEmpresa.js"></script>
</head>
<body onload ="mostrarListaYouEmpre()">
	<!--Plantilla Cabecera-->
	<header>
		<div class="logo">
			<img src="../../images/logo.png" alt="" width="200" height="75" >
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
	<h2>Youtubers Registrados</h2>
	<hr>
	<br>
	<form name="buscaListadoYouEmpre">
		<input type="text" name="nombreListaYouEmpre" id="nombreListaYouEmpre" class="url" onblur="guardarListaYouEmpre()" placeholder="Ingresa el nombre del canal" />
		<button>Buscar</button>
	</form>
	<br><br><br>



	<!--Listado Youtubers-->
	<div class = "tablaEmpresas">
	<table border="1">

		<thead>
			<tr>
				<th>Imagen</th> 
				<th>Nombre</th>
				<th>Subscriptores</th>
				<th>Categoría</th>
				<th>Link</th>
				<th>Contacto</th>
			</tr>
		</thead>

		<tbody>
		<tr>
			<td headers="imagen"><img src="../../images/julio.jpeg" alt="" width="141" height="130"></td>
			<td headers="nombre">Julio Profe</td>
			<td headers="subscriptores">1.491.194</td>
			<td headers="categoria">Educativo</td>
			<td headers="link">https://www.youtube.com/user/julioprofe</td>
			<td headers="contacto"><a class="btn" href="perfil.php" title="contactar">Contactar</a>
		</tr>

		<tr>
			<td headers="imagen"><img src="../images/elrubius.jpg" alt="" width="141" height="130"></td>
			<td headers="nombre">ElrubiusOMG</td>
			<td headers="subscriptores">23.248.456</td>
			<td headers="categoria">Gameplays</td>
			<td headers="link">https://www.youtube.com/user/elrubiusOMG</td>
			<td headers="contacto"><a class="btn" href="perfil.php" title="contactar">Contactar</a>
		</tr>
		</tbody>

		<thead>
			<tr>
				<th class="footLista"colspan='8'; rowspan='8';></th>
			</tr>
		</thead>
	</table>
	</div>
	<br><br><br>


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
