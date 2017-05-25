function comprobarLogin(){
	var usuario = document.getElementById("usuario").value;
	var password = document.getElementById("password").value;

	if(usuario == ""){
		openAlert();
		return false;
		
	}
	if(password == ""){
		openAlert();
		return false;
	}
}


function openAlert(){
	$(".alertaInicioSesion").fadeIn("slow").delay(1000).fadeOut();
}
