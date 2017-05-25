function comprobarContacto(){
	var email = document.getElementById("email").value;
	var expr = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if(expr.test(email)){
		
	}else{
		openTemporal();
	}

}

function openTemporal(){
	$(".vtnFondoN").fadeIn("slow").delay(1000).fadeOut();
}


