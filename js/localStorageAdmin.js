//agregarEmpresaAdmin
function guardarAgregaEmpreAdm(){
	localStorage.nombreAgregaEmpreAdm = document.AgregaEmpreAdm.nombreAgregaEmpreAdm.value;
	localStorage.emailAgregaEmpreAdm = document.AgregaEmpreAdm.emailAgregaEmpreAdm.value;
	localStorage.apellidosAgregaEmpreAdm = document.AgregaEmpreAdm.apellidosAgregaEmpreAdm.value;
	localStorage.nombreContactoAgregaEmpreAdm = document.AgregaEmpreAdm.nombreContactoAgregaEmpreAdm.value;
	localStorage.telefonoAgregaEmpreAdm = document.AgregaEmpreAdm.telefonoAgregaEmpreAdm.value;
	localStorage.rfcAgregaEmpreAdm = document.AgregaEmpreAdm.rfcAgregaEmpreAdm.value;
}
function mostrarAgregaEmpreAdm(){
	document.getElementById('nombreAgregaEmpreAdm').value = localStorage.getItem('nombreAgregaEmpreAdm');
	document.getElementById('emailAgregaEmpreAdm').value = localStorage.getItem('emailAgregaEmpreAdm');
	document.getElementById('apellidosAgregaEmpreAdm').value = localStorage.getItem('apellidosAgregaEmpreAdm');
	document.getElementById('nombreContactoAgregaEmpreAdm').value = localStorage.getItem('nombreContactoAgregaEmpreAdm');
	document.getElementById('telefonoAgregaEmpreAdm').value = localStorage.getItem('telefonoAgregaEmpreAdm');
	document.getElementById('rfcAgregaEmpreAdm').value = localStorage.getItem('rfcAgregaEmpreAdm');

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