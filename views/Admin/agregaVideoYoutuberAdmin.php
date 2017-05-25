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
		<title>Subir Video</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
		<link rel="stylesheet" href="../../css/agregaVideoYoutuberAdmin.css">
		<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
		<script src="../../js/localStorageAdmin.js"></script>
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/manejoDOM.js"></script>

		<script type="text/javascript" src="../../js/validaciones/validacionVideoYoutuber.js"></script>

		<script type="text/javascript" src="../../js/bootstrap-notify.js"></script>
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap-notify.css"/>

	</head>
	<body onload="mostrarAgregaVideoYouAdm()">

		<div class="vtnFondoN">
			<div class="form">
			<br>
			<h3>SE HA AGREGADO EXITOSAMENTE!</h3>
			<hr>
			</div>
		</div>

	<div class="alertaLlenado">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>Complete todos los campos.</strong></div>
		</div>
	</div>

	<div class="alertaNombre">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>El título es demasiado grande. Redúcelo.</strong></div>
		</div>
	</div>

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
		<h1>Subir video</h1>
		<hr>
		
		<form name="AgregaVideoYouAdm" method="post" action="javascript:openTemporal();" onSubmit="return comprobar();">
			<div class="box">
				<input type="text" name="tituloAgregaVideoYouAdm" id="tituloAgregaVideoYouAdm" class="url" placeholder="Título del video" onblur="guardarAgregaVideoYouAdm()"/>
				<input type="text" name="urlAgregaVideoYouAdm" id="urlAgregaVideoYouAdm" class="url" placeholder="Ingresa la url del video" onblur="guardarAgregaVideoYouAdm()" />

				<select id="soflow">
					<option>Seleciona una Empresa</option>
  					<option>Empresa 1</option>
  					<option>Empresa 2</option>
				</select>

				<select id="soflow">
					<option>Seleciona una Producto</option>
  					<option>Producto 1</option>
  					<option>Producto 2</option>
				</select>

				<textarea class="url" name="comentariosAgregaVideoYouAdm" id="comentariosAgregaVideoYouAdm" rows="7" cols="30" placeholder="Comentarios" onblur="guardarAgregaVideoYouAdm()"></textarea><br>

				
				<button  class="btn" type="submit">Subir</button>
				<button class="btn2" type="submit">Cancelar</button>
			</div> <!-- End Box -->
		</form>	

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