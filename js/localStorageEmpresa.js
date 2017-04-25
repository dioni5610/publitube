

//AGREGA PRODUCTO
function guardarAgregaProducto(){
	localStorage.nombreAgreProd = document.agregaProducto.nombreAgreProd.value;
	localStorage.descripcionAgreProd = document.agregaProducto.descripcionAgreProd.value;
}
function mostrarAgregaProducto(){
	document.getElementById('nombreAgreProd').value = localStorage.getItem('nombreAgreProd');
	document.getElementById('descripcionAgreProd').value = localStorage.getItem('descripcionAgreProd');
}


//MODIFICAR PRODUCTO
function guardarModificarProducto(){
	localStorage.nombreModProd = document.modificaProducto.nombreModProd.value;
	localStorage.descripcionModProd = document.modificaProducto.descripcionModProd.value;
}
function mostrarModificarProducto(){
	document.getElementById('nombreModProd').value = localStorage.getItem('nombreModProd');
	document.getElementById('descripcionModProd').value = localStorage.getItem('descripcionModProd');
}

//AGREGA PATROCINADO
function guardarAgregaPatrocinado(){
	localStorage.nombreAgrePatrocina = document.agregaPatrocinado.nombreAgrePatrocina.value;
}
function mostrarAgregaPatrocinado(){
	document.getElementById('nombreAgrePatrocina').value = localStorage.getItem('nombreAgrePatrocina');
}

//LISTADO YOUTUBER EMPRESA
function guardarListaYouEmpre(){
	localStorage.nombreListaYouEmpre = document.buscaListadoYouEmpre.nombreListaYouEmpre.value;
}
function mostrarListaYouEmpre(){
	document.getElementById('nombreListaYouEmpre').value = localStorage.getItem('nombreListaYouEmpre');
}

//PERFIL.HTML -> CONTACTAR YOUTUBER EMPRESA
function guardarContactYouEmpre(){
	localStorage.nombreContactYouEmpre = document.ContactYouEmpre.nombreContactYouEmpre.value;
	localStorage.correoContactYouEmpre = document.ContactYouEmpre.correoContactYouEmpre.value;
	localStorage.MensajeContactYouEmpre = document.ContactYouEmpre.MensajeContactYouEmpre.value;
	}
function mostrarContactYouEmpre(){
	document.getElementById('nombreContactYouEmpre').value = localStorage.getItem('nombreContactYouEmpre');
	document.getElementById('correoContactYouEmpre').value = localStorage.getItem('correoContactYouEmpre');
	document.getElementById('MensajeContactYouEmpre').value = localStorage.getItem('MensajeContactYouEmpre');
}


