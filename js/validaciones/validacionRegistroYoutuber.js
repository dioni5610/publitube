function comprobar()
		{
			var nombreusuario = document.getElementById("nombreUsuarioRegYou").value;
			var password = document.getElementById("passwordRegYou").value;
			var passwordc = document.getElementById("repasswordRegYou").value;
			var nombrecanal = document.getElementById("nombrecanalRegYou").value;
			var categoria = document.getElementById("categoriaRegYou").value;
			var subs = document.getElementById("suscriptoresRegYou").value;
			var correo = document.getElementById("correoRegYou").value;
			var telefono = document.getElementById("telefonoRegYou").value;

			var expr = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

			if(expr.test(correo))
			{
				
			}
			else{
				$(".alertaCorreo").fadeIn("slow").delay(1000).fadeOut();
				return false;
			}
	
			if(passwordc != password)
			{
				$(".alertaContrasena").fadeIn("slow").delay(1000).fadeOut();
				return false;
			}
		
			if(nombreusuario.length == 0)
			{
				alertLlenado();
		      	return false;
			}
			else if(password.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(passwordc.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(nombrecanal.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(categoria.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(subs.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(correo.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	else if(telefono.length == 0)
	      	{
	      		alertLlenado();
	      		return false;
	      	}
	      	

			return true;
		}

function alertLlenado(){
	$(".alertaLlenado").fadeIn("slow").delay(1000).fadeOut();
}
