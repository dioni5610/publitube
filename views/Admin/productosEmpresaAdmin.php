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

<!DOCTYPE <!DOCTYPE html>
<html>
	<head>
		<title>Listado Productos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
		<link rel="stylesheet" href="../../css/productosEmpresaAdmin.css">
		<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/manejoDOM.js"></script>
	</head>
	<body>

	<div class="vtnFondoN">
			<div class="form">
			<div class="cerrar"><a href="javascript:closeFondoNegro();"> Cierra X</a></div>
			<br>
			<p>Este Item será permanentemente eliminado y no podrá ser recuperado.</p>
			<p>¿Realmente quiere eliminarlo?</p>
			<hr>
			<button>Eliminar</button><button>Cerrar</button>
			</div>
		</div>


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
		<h2>Lista de productos</h2>
		<hr>
		<br>
		<div class="tablaEmpresas">
			<table>
				<thead>
					<tr>
						<th>Foto</th> 
						<th>Nombre</th>
						<th>Fecha Subida</th>
						<th>Colaboradores</th>
						<th>Patrocinadores</th>
						<th>Descripción</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr> 
						<td><img src="../../images/chispas.jpg" alt="" width="141" height="80" ></td> 
						<td>choCookies</td> 
						<td>02/01/2017</td> 
						<td>0</td>
						<td>1</td> 
						<td>Galletas con chispas de chocolate</td> 
						<td headers="imagen"><a href="modificarProducto.php"><img src="../../images/modify.png" alt="" width="50" height="50"></a></td>
						<td headers="imagen"><a href="javascript:openFondoNegro();"><img src="../../images/trash.png" alt="" width="50" height="50"></a></td>
					</tr> 

					<tr> 
						<td><img src="../../images/habaneras.jpg" alt="" width="141" height="80" ></td> 
						<td>Habaneras</td> 
						<td>02/14/2017</td> 
						<td>3</td>
						<td>5</td> 
						<td>Papas habaneras</td> 
						<td headers="imagen"><a href="modificarProducto.php"><img src="../../images/modify.png" alt="" width="50" height="50"></a></td>
						<td headers="imagen"><a href="javascript:openFondoNegro();"><img src="../../images/trash.png" alt="" width="50" height="50"></a></td>
					</tr> 

				</tbody>
				<thead>
					<tr>
						<th class="totalLista" colspan='9'; rowspan='7';>Total de Productos: 2</th>
					</tr>
				</thead>
			</table>
		</div>
		<br><br><br>
		<a class="btn" href="agregaProducto.php">Agregar</a>
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