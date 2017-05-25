<?php

//Controlando el inicio de la sesión
require'../../class/sessions.php';
$objses = new Sessions();
$objses->init();

if(isset($_SESSION['loginUsers'])){
	$nameU = $objses->get('loginUsers');
	$idUse = $objses->get('idUser');
	$idPro = $objses->get('idProfile');

	if($idPro!=1){
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

	<title>Videos Youtuber</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/misVideos.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
</head>
<body>
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
	<h2>JulioProfe</h2>
	<hr>
	<br>
	<!--Listado Youtubers-->
	<div class = "tablaEmpresas">
	<table border="1">

		<thead>
			<tr>
				<th>Imagen</th>
				<th>Link</th> 
				<th>Título</th>
				<th>Empresa</th>
				<th>Producto</th>
				<th>Comentarios</th>
				<th>Estatus</th>
				<th>Borrar</th>
				<th>Modificar</th>
			</tr>
		</thead>

		<tbody>
		<tr>
			<td headers="imagen"><img src="../../images/beach.png" alt="" width="141" height="130"></td>
			<td headers="link">https://www.youtube.com/watch?v=cF8dcQHM3cY</td>
			<td headers="nombre">Refresca Beach</td>
			<td headers="subscriptores">Coca-Cola</td>
			<td headers="categoria">Sprite Pepino</td>
			<td headers="link">Se realizó el video, en minuto 6:34 está mostrado el producto con todos los detalles</td>
			<td headers="contacto">APROBADO</td>
			<td headers="imagen"><img src="../../images/trash.png" alt="" width="50" height="50"></td>
			<td headers="imagen"><a href="modificarVideosAdmin.php"><img src="../../images/modify.png" alt="" width="50" height="50"></a></td>
		</tr>

		<tr>
			<td headers="imagen"><img src="../../images/bodyLotion.png" alt="" width="141" height="130"></td>
			<td headers="link">https://www.youtube.com/watch?v=cF8dcQHM3cY</td>
			<td headers="nombre">Crema emergency</td>
			<td headers="subscriptores">Nivea</td>
			<td headers="categoria">Crema Tiny</td>
			<td headers="link">Ya hice el video, no pude hacer bien el enfoque como se concordó pero si se muestra muy bien el producto</td>
			<td headers="contacto">PENDIENTE</td>
			<td headers="imagen"><img src="../../images/trash.png" alt="" width="50" height="50"></td>
			<td headers="imagen"><a href="modificarVideosAdmin.php"><img src="../../images/modify.png" alt="" width="50" height="50"></a></td>
		</tr>
		</tbody>

		<thead>
			<tr>
				<th class="footLista" colspan='10'; rowspan='10';></th>
			</tr>
		</thead>
	</table>
	</div>

		<a class="btn" href="agregaVideoYoutuberAdmin.php">Agregar</a>


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