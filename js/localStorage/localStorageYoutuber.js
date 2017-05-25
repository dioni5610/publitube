//subirVideo.html
function guardarSubirVideo(){
	localStorage.tituloSubirVideo = document.SubirVideo.tituloSubirVideo.value;
	localStorage.urlSubirVideo = document.SubirVideo.urlSubirVideo.value;
	localStorage.comentariosSubirVideo = document.SubirVideo.comentariosSubirVideo.value;
}
function mostrarSubirVideo(){
	document.getElementById('tituloSubirVideo').value = localStorage.getItem('tituloSubirVideo');
	document.getElementById('urlSubirVideo').value = localStorage.getItem('urlSubirVideo');
	document.getElementById('comentariosSubirVideo').value = localStorage.getItem('comentariosSubirVideo');
	}

//listaEmpresasYoutuber.html
function guardarListaEmpreYou(){
	localStorage.buscaListaEmpreYou = document.ListaEmpreYou.buscaListaEmpreYou.value;
}
function mostrarListaEmpreYou(){
	document.getElementById('buscaListaEmpreYou').value = localStorage.getItem('buscaListaEmpreYou');
}

