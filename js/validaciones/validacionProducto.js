function comprobar()
		{
			var nombreAgreProd = document.getElementById("nombreAgreProd").value;
			var descripcionAgreProd = document.getElementById("descripcionAgreProd").value;


			if(nombreAgreProd.length == 0)
			{
				openAlertLlenado();
		      	return false;
			}
			else if (nombreAgreProd.length > 15)
		   	{
		   		$(".alertaNombre").fadeIn("slow").delay(1000).fadeOut();
		      	return false;
		   	}
			else if(descripcionAgreProd.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
			return true;
		}

function openAlertLlenado(){
	$(".alertaLlenado").fadeIn("slow").delay(2500).fadeOut();
}