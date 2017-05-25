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
	<title>Registro Youtuber</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/agregaYoutuber.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
	<script src="../../js/localStorageAdmin.js"></script>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/manejoDOM.js"></script>

	<script type="text/javascript" src="../../js/validaciones/validacionRegistroYoutuber.js"></script>

	<script type="text/javascript" src="../../js/bootstrap-notify.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap-notify.css"/>

</head>
<body onload="mostrarAgregaYouAdm()">
	<div class="vtnFondoN">
			<div class="form">
			<br>
			<h3>SE HA AGREGADO EXITOSAMENTE!</h3>
			<hr>
			</div>
		</div>


	<div class="alertaCorreo">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>El correo es invalido, vuelve a comprobar.</strong></div>
		</div>
	</div>
	<div class="alertaContrasena">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>Las contraseñas no coinciden.</strong></div>
		</div>
	</div>
	<div class="alertaLlenado">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>Complete todos los campos para su registro.</strong></div>
		</div>
	</div>


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
	<h2 id="h2">Registro de youtubers</h2>
	<label class="llene">Llene Formulario de Registro</label>
	<hr>
	<section>
		<form name="AgregaYouAdm" action="javascript:openTemporal();" method="post" onSubmit="return comprobar();"> <!--tambien se puede post, con get se ven los datos en la url-->

			<div class="box"> 	
				<br>
				<div>	
					<label for="nombreusuario">Nombre de usuario</label>
					<input type="text" name="nombreUsuarioRegYou" id="nombreUsuarioRegYou" placeholder="Nombre de usuario" align="right" onblur="guardarAgregaYouAdm()">
				</div>
				<br>
				<div>
					<label for="password">Password</label>
					<input type="password" name="passwordRegYou" id="passwordRegYou" placeholder="Contraseña">
				</div>
				<br>
				<div>
					<label for="Repassword">Repetir Password</label>
					<input type="password" name="repasswordRegYou" id="repasswordRegYou" placeholder="Repetir Contraseña">
				</div>
				<br>
				<div>	
					<label for="nombrecanal">Nombre del canal</label>
					<input type="text" id="nombrecanalRegYou" name="nombrecanalRegYou" placeholder="Nombre del canal"onblur="guardarAgregaYouAdm()">
				</div>
				<br>
				<div>	
					<label for="categoria">Categoria del canal</label>
					<input type="text"  id="categoriaRegYou" name="categoriaRegYou" placeholder="Categoria" onblur="guardarAgregaYouAdm()">
				</div>
				<br>
				<div>	
					<label for="suscriptores">Suscriptores del canal</label>
					<input type="text"  id="suscriptoresRegYou" name="suscriptoresRegYou" placeholder="Suscriptores" onblur="guardarAgregaYouAdm()">
				</div>
				<br>
				<div>
					<label for="correo">Correo</label>
					<input type="mail" id="correoRegYou" name="correoRegYou" placeholder="Correo" onblur="guardarAgregaYouAdm()" />
				</div>
				<br>
				<div>	
					<label for="telefono">Telefono</label>
					<input type="text"  id="telefonoRegYou" name="telefonoRegYou" placeholder="Telefono" onblur="guardarAgregaYouAdm()">
				</div>
				<br>
				<div>
					<label>Sexo: </label>
					<br>
					<input type="radio" name="opcion" value="1" id="opcion1">
					<label for="opcion1">Femenino</label>
					<input type="radio" name="opcion" value="2" id="opcion2">
					<label for="opcion2">Masculino</label>
				</div>

				<br>
				<div>
					<button class="btn2" type="submit">Registrar</button> <a class="btn2" href="listadoYoutuberAdmin.php" >Cancelar</a>
				</div>

			</div>
		</form>
	</section>
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