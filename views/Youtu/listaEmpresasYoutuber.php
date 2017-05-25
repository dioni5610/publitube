<?php

//Controlando el inicio de la sesión
require'../../class/sessions.php';
$objses = new Sessions();
$objses->init();

if(isset($_SESSION['loginUsers'])){
	$nameU = $objses->get('loginUsers');
	$idUse = $objses->get('idUser');
	$idPro = $objses->get('idProfile');

	if($idPro!=2){
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

<!DOCTYPE <!DOCTYPE html>
<html>
	<head>
		<title>Lista Empresas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
		<link rel="stylesheet" href="../../css/listaEmpresasYoutuber.css">
		<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
		<script src="../../js/localStorageYoutuber.js"></script>
	</head>
	<body onload="mostrarListaEmpreYou()">
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
		<h2>Lista de Empresas</h2>
		<hr>
		<form name="ListaEmpreYou">
			<input type="text" name="buscaListaEmpreYou" id="buscaListaEmpreYou" class="url" placeholder="Ingresa el nombre de la empresa" onblur="guardarListaEmpreYou()"/>
		</form>
		<button>Buscar</button>
		<br><br><br>
		<div class="tablaEmpresas">
			<table>
				<thead>
					<tr>
						<th>Imagen</th> 
						<th>Nombre</th>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Total de Productos</th>
						<th>Descripción</th>
					</tr>
				</thead>

				<tbody>
					<tr> 
						<td><img src="../../images/coca.png" alt="" width="141" height="80" ></td> 
						<td>Coca-Cola</td> 
						<td>coca14</td> 
						<td>cocaPubli@cocacola.com.mx</td> 
						<td>4</td> 
						<td>Coca-Cola is a carbonated soft drink produced by The Coca-Cola Company.</td> 
					</tr> 

					<tr> 
						<td><img src="../../images/gamesa.jpg" alt="" width="141" height="80" ></td> 
						<td>Gamesa</td> 
						<td>Gamesa12</td> 
						<td>areaGamesa@gamesa.com.mx</td> 
						<td>14</td> 
						<td>Gamesa is Mexico's largest manufacturer of cookies.</td> 
					</tr> 

				</tbody>

				<thead>
					<tr>
						<th class="footLista"colspan='8'; rowspan='8';></th>
					</tr>
				</thead>
			</table>
		</div>
		<br><br><br><br><br>

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