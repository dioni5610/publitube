function comprobar()
		{
			var nombreEmpre = document.getElementById("nombreEmpre").value;
			var email = document.getElementById("email").value;
			var apellido = document.getElementById("apellido").value;
			var nombreContacto = document.getElementById("nombreContacto").value;
			var contrasena = document.getElementById("contrasena").value;
			var recontra = document.getElementById("recontra").value;
			var telefono = document.getElementById("telefono").value;
			var rfc = document.getElementById("rfc").value;
			var expr = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

			if (nombreEmpre.length > 15)
		   	{
		   		$(".alertaNombre").fadeIn("slow").delay(1000).fadeOut();
		      	return false;
		   	}

			if(expr.test(email))
			{
				
			}else{
				$(".alertaCorreo").fadeIn("slow").delay(1000).fadeOut();
				
				return false;
			}

			if(recontra != contrasena)
			{
				$(".alertaContrasena").fadeIn("slow").delay(1000).fadeOut();
				return false;
			}

			if(nombreEmpre.length == 0)
			{
				openAlertLlenado();
		      	return false;
			}
			else if(email.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(apellido.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(nombreContacto.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(contrasena.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(recontra.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(telefono.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(rcf.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}

			return true;
		}

function openAlertLlenado(){
	$(".alertaLlenado").fadeIn("slow").delay(1000).fadeOut();
}