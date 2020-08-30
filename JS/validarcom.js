function validarcom(){
	
	var Asunto = document.getElementById("Asunto").value;
	
	
	if (Asunto == "" ){
		alert("Por favor, escriba el asunto sobre el comentario");
		return false;
	}
	
	else if(!isNaN(Asunto)){
		alert("El nombre del asunto es incorrecto");
		return false;
	}
	
	else if(Asunto.length>11){
		alert("El asunto no debe de exceder de 10 carácteres");
		return false;
	}
	
	}