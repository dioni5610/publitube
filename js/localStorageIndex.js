

//CONTACTO
function guardarContacto(){
	localStorage.nombre = document.Contacto.nombre.value;
	localStorage.email = document.Contacto.email.value;
	localStorage.mensaje = document.Contacto.mensaje.value;
}
function mostrarContacto(){
	document.getElementById('nombre').value = localStorage.getItem('nombre');
	document.getElementById('email').value = localStorage.getItem('email');
	document.getElementById('mensaje').value = localStorage.getItem('mensaje');
}

//REGISTRO DE EMPRESAS
function guardarRegistroEmpresa(){
	localStorage.nombreEmpre = document.registroEmpresa.nombreEmpre.value;
	localStorage.email = document.registroEmpresa.email.value;
	localStorage.apellido = document.registroEmpresa.apellido.value;	
	localStorage.nombreContacto = document.registroEmpresa.nombreContacto.value;
	localStorage.telefono = document.registroEmpresa.telefono.value;
	localStorage.rfc = document.registroEmpresa.rfc.value;
}
function mostrarRegistroEmpresa(){
	document.getElementById('nombreEmpre').value = localStorage.getItem('nombreEmpre');
	document.getElementById('email').value = localStorage.getItem('email');
	document.getElementById('apellido').value = localStorage.getItem('apellido');
	document.getElementById('nombreContacto').value = localStorage.getItem('nombreContacto');
	document.getElementById('telefono').value = localStorage.getItem('telefono');
	document.getElementById('rfc').value = localStorage.getItem('rfc');
}

//REGISTRO DE YOUTUBERS
function guardarRegistroYoutuber(){
	localStorage.nombreUsuarioRegYou = document.registroYoutuber.nombreUsuarioRegYou.value;
	localStorage.nombrecanalRegYou = document.registroYoutuber.nombrecanalRegYou.value;
	localStorage.categoriaRegYou = document.registroYoutuber.categoriaRegYou.value;	
	localStorage.suscriptoresRegYou = document.registroYoutuber.suscriptoresRegYou.value;
	localStorage.correoRegYou = document.registroYoutuber.correoRegYou.value;
	localStorage.telefonoRegYou = document.registroYoutuber.telefonoRegYou.value;
}
function mostrarRegistroYoutuber(){
	document.getElementById('nombreUsuarioRegYou').value = localStorage.getItem('nombreUsuarioRegYou');
	document.getElementById('nombrecanalRegYou').value = localStorage.getItem('nombrecanalRegYou');
	document.getElementById('categoriaRegYou').value = localStorage.getItem('categoriaRegYou');
	document.getElementById('suscriptoresRegYou').value = localStorage.getItem('suscriptoresRegYou');
	document.getElementById('correoRegYou').value = localStorage.getItem('correoRegYou');
	document.getElementById('telefonoRegYou').value = localStorage.getItem('telefonoRegYou');
}