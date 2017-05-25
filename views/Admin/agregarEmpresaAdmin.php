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
	<title>Registrar Empresa</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/agregarEmpresaAdmin.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
	<script src="../../js/localStorageAdmin.js"></script>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/manejoDOM.js"></script>
	
	<script type="text/javascript" src="../../js/validaciones/validacionRegistroEmpresa.js"></script>

	<script type="text/javascript" src="../../js/bootstrap-notify.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap-notify.css"/>
</head>
<body onload="mostrarAgregaEmpreAdm()">


	<div class="vtnFondoN">
			<div class="form">
			<br>
			<h3>SE HA AGREGADO EXITOSAMENTE!</h3>
			<hr>
			</div>
		</div>

	<div class="alertaNombre">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>El nombre de la empresa es demasiado grande. Redúcelo.</strong></div>
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

	<div class="TablaEmpresas">
		<div id="DatosContacto">
			<label class="EtiquetaRegistro">Registro Empresa</label>
			<br>
			<label class="llene">Llene Formulario de Registro</label>
			<hr class="SeparadorDatos">
		</div>
	 	<form name="AgregaEmpreAdm" action="javascript:openTemporal();" onSubmit="return comprobar();">
	  		<table class="box">
		    	<tr>
		    		<td>Nombre de la Empresa</td>
		    		<td><input class="email" name="nombreEmpre" id="nombreEmpre" type="text" maxlength="30" placeholder="ejem. Youtube" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr> 
		    	<tr>
		    		<td>E-mail</td>
		    		<td><input class="email" name="email" id="email" type="email" maxlength="20" placeholder="ejem@ejem" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr>
		    	<tr>
		    		<td>Apellidos de Contacto</td>
		    		<td><input class="email" name="apellido" id="apellido" type="text" maxlength="30" placeholder="ejem. Garcia" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr>
		    	<tr>
		    		<td>Nombre del Contacto</td>
		    		<td><input class="email" name="nombreContacto" id="nombreContacto" type="text" maxlength="20" placeholder="ejem. Dioni" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr>
		    	<tr>
		    		<td>Contraseña</td>
		    		<td><input class="email" name="contrasena" id="contrasena" type="password" maxlength="30" placeholder="Contraseña123"></td>
		    	</tr>
		    	<tr>
		    		<td>Repita su Contraseña</td>
		    		<td><input class="email" name="recontra" id="recontra" type="password" maxlength="30" placeholder="Contraseña123"></td>
		    	</tr>
		    	<tr>
		    		<td>Telefono de contacto</td>
		    		<td><input class="email" name="telefono" id="telefono" type="tel" maxlength="12" placeholder="22 2222 22" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr>
		    	<tr>
		    		<td>RFC</td>
		    		<td><input class="email" name="rfc" id="rfc" type="text" maxlength="12" placeholder="RFC" onblur="guardarAgregaEmpreAdm()"></td>
		    	</tr>

		    	<tr>
		    		<td><button class = "btn" type="submit">Agregar</button></td>
		    		<td><input class = "btn2" type="reset"></td>
		    	</tr>
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