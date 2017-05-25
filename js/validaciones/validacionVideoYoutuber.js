function comprobar()
		{
			var tituloAgregaVideoYouAdm = document.getElementById("tituloAgregaVideoYouAdm").value;
			var urlAgregaVideoYouAdm = document.getElementById("urlAgregaVideoYouAdm").value;
			var comentariosAgregaVideoYouAdm = document.getElementById("comentariosAgregaVideoYouAdm").value;

			if (tituloAgregaVideoYouAdm.length > 15)
		   	{
		   		$(".alertaNombre").fadeIn("slow").delay(1000).fadeOut();
		      	return false;
		   	}


			if(tituloAgregaVideoYouAdm.length == 0)
			{
				openAlertLlenado();
		      	return false;
			}
			else if(urlAgregaVideoYouAdm.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}
	      	else if(comentariosAgregaVideoYouAdm.length == 0)
	      	{
	      		openAlertLlenado();
	      		return false;
	      	}

			return true;
		}

function openAlertLlenado(){
	$(".alertaLlenado").fadeIn("slow").delay(1000).fadeOut();
}