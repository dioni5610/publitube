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

<!DOCTYPE <!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<!--Plantilla Titulo-->
	<title>Modificar tú Perfil</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/modificarPerfilYoutuber.css"/>
	<link rel="shortcut icon" type= "image/png" href="../../images/favicon.png"/>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/manejoDOM.js"></script>

	<script type="text/javascript" src="../../js/validaciones/validacionPerfilYoutuber.js"></script>

	<script type="text/javascript" src="../../js/bootstrap-notify.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap-notify.css"/>
</head>
<body>
	<div class="vtnFondoN">
			<div class="form">
			<div class="cerrar"><a href="javascript:closeFondoNegro();"> Cierra X</a></div>
			<p>¿Desea guardar las modificaciones?</p>
			<hr>
			<button>Confirmar cambios</button><button>Cerrar</button>
			</div>
	</div>


	<div class="alertaNombre">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>El nombre es demasiado grande. Redúcelo.</strong></div>
		</div>
	</div>
	<div class="alertaCorreo">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>El correo es invalido, vuelve a comprobar.</strong></div>
		</div>
	</div>
	<div class="alertaLlenado">
		<div class="notifications top-right">
			<div class="alert alert-danger"><strong>Complete todos los campos.</strong></div>
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
	<!--Cuerpo-->
	<div class="TablaEmpresas">
		<div id="DatosContacto">

			<label class="EtiquetaRegistro">Modifíca tú Perfil</label>
			<br>
			<label class="llene">SibolaToons</label>
			<hr class="SeparadorDatos">
		</div>
		<br>
	 	<form name="formuarioPerfilYoutuber" method="post" action="javascript:openFondoNegro();" onSubmit="return comprobar();">
	  		<table id="formularioEmpresa">
		    	<tr><td>Imagen:</td><td><img src="../../images/bloggerPerfil.png" alt="" width="150" height="120" ></td></tr>
		    	<tr><td></td><td><input type="file" name="url" class="filechooser"/></td></tr>
		    	<tr><td>Nombre:</td><td><input type="text" name="nombre" id="nombre" class="url" value="Luis" /></td></tr>
		    	<tr><td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" class="url" value="Medina Gales" /></td></tr>
		    	<tr><td>Nombre de canal:</td><td><input type="text" name="nombreCanal" id="nombreCanal" class="url" value="SibolaToons" /></td></tr>
		    	<tr><td>Subscriptores:</td><td><input type="text" name="subscriptores" id="subscriptores" class="url" value="97,654" /></td></tr>
		    	<tr><td>Categoría:</td><td><input type="text" name="categoria" id="categoria" class="url" value="Mini-documentales" /></td></tr>
		    	<tr><td>Link:</td><td><input type="text" name="link" id="link" class="url" value="www.youtube.com/SibolaToons" /></td></tr>
		    	<tr><td>Correo:</td><td><input type="text" name="correo" id="correo" class="url" value="luisMedgal@gmail.com" /></td></tr>
		    	<tr><td>Contraseña:</td><td><input type="text" name="contrasena" id="contrasena" class="url" value="contraseña" /></td></tr>
		    	<tr><td><button class="btn2" type="submit">Guardar Cambios</button></td><td><a class = "btn2" type="button" href="miPerfilYoutuber.php">Cancelar</a></td></tr>
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