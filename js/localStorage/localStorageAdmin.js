//agregarEmpresaAdmin
function guardarAgregaEmpreAdm(){
	localStorage.nombreEmpre = document.AgregaEmpreAdm.nombreEmpre.value;
	localStorage.email = document.AgregaEmpreAdm.email.value;
	localStorage.apellido = document.AgregaEmpreAdm.apellido.value;
	localStorage.nombreContacto = document.AgregaEmpreAdm.nombreContacto.value;
	localStorage.telefono = document.AgregaEmpreAdm.telefono.value;
	localStorage.rfc = document.AgregaEmpreAdm.rfc.value;
}
function mostrarAgregaEmpreAdm(){
	document.getElementById('nombreEmpre').value = localStorage.getItem('nombreEmpre');
	document.getElementById('email').value = localStorage.getItem('email');
	document.getElementById('apellido').value = localStorage.getItem('apellido');
	document.getElementById('nombreContacto').value = localStorage.getItem('nombreContacto');
	document.getElementById('telefono').value = localStorage.getItem('telefono');
	document.getElementById('rfc').value = localStorage.getItem('rfc');

	}

//agregaYoutuber
function guardarAgregaYouAdm(){
	localStorage.nombreUsuarioAgregaYouAdm = document.AgregaYouAdm.nombreUsuarioAgregaYouAdm.value;
	localStorage.nombreAgregaYouAdm = document.AgregaYouAdm.nombreAgregaYouAdm.value;
	localStorage.nombreCanalAgregaYouAdm = document.AgregaYouAdm.nombreCanalAgregaYouAdm.value;
	localStorage.categoriaAgregaYouAdm = document.AgregaYouAdm.categoriaAgregaYouAdm.value;
	localStorage.suscriptoresAgregaYouAdm = document.AgregaYouAdm.suscriptoresAgregaYouAdm.value;
	localStorage.correoAgregaYouAdm = document.AgregaYouAdm.correoAgregaYouAdm.value;
	localStorage.telefonoAgregaYouAdm = document.AgregaYouAdm.telefonoAgregaYouAdm.value;
	}
function mostrarAgregaYouAdm(){
	document.getElementById('nombreUsuarioAgregaYouAdm').value = localStorage.getItem('nombreUsuarioAgregaYouAdm');
	document.getElementById('nombreAgregaYouAdm').value = localStorage.getItem('nombreAgregaYouAdm');
	document.getElementById('nombreCanalAgregaYouAdm').value = localStorage.getItem('nombreCanalAgregaYouAdm');
	document.getElementById('categoriaAgregaYouAdm').value = localStorage.getItem('categoriaAgregaYouAdm');
	document.getElementById('suscriptoresAgregaYouAdm').value = localStorage.getItem('suscriptoresAgregaYouAdm');
	document.getElementById('correoAgregaYouAdm').value = localStorage.getItem('correoAgregaYouAdm');
	document.getElementById('telefonoAgregaYouAdm').value = localStorage.getItem('telefonoAgregaYouAdm');
	}

//agregaVideoYoutuberAdmin
function guardarAgregaVideoYouAdm(){
	localStorage.tituloAgregaVideoYouAdm = document.AgregaVideoYouAdm.tituloAgregaVideoYouAdm.value;
	localStorage.urlAgregaVideoYouAdm = document.AgregaVideoYouAdm.urlAgregaVideoYouAdm.value;
	localStorage.comentariosAgregaVideoYouAdm = document.AgregaVideoYouAdm.comentariosAgregaVideoYouAdm.value;
}
function mostrarAgregaVideoYouAdm(){
	document.getElementById('tituloAgregaVideoYouAdm').value = localStorage.getItem('tituloAgregaVideoYouAdm');
	document.getElementById('urlAgregaVideoYouAdm').value = localStorage.getItem('urlAgregaVideoYouAdm');
	document.getElementById('comentariosAgregaVideoYouAdm').value = localStorage.getItem('comentariosAgregaVideoYouAdm');
}