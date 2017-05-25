function comprobar()
		{
			var nombre = document.getElementById("nombre").value;
			var apellidos = document.getElementById("apellidos").value;
			var nombreCanal = document.getElementById("nombreCanal").value;
			var subscriptores = document.getElementById("subscriptores").value;
			var categoria = document.getElementById("categoria").value;
			var link = document.getElementById("link").value;
			var correo = document.getElementById("correo").value;
			var contrasena = document.getElementById("contrasena").value;
			var expr = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

			if (nombre.length > 15)
		   	{
		   		$(".alertaNombre").fadeIn("slow").delay(1000).fadeOut();
		      	return false;
		   	}

			if(expr.test(correo))
			{
				
			}else{
				$(".alertaCorreo").fadeIn("slow").delay(1000).fadeOut();
				
				return false;
			}

			if(nombre.length == 0)
			{
				openAlertLlenado();
		      	return false;
			}
			else if(apellidos.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(nombreCanal.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(subscriptores.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(categoria.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(link.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(correo.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(contrasena.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}

			return true;
		}

function openAlertLlenado(){
	$(".alertaLlenado").fadeIn("slow").delay(1000).fadeOut();
}