function validar(){
	
	var nombre = document.getElementById("nombre").value;
	var email = document.getElementById("email").value;
	var edad = document.getElementById("edad").value;
	var comentario = document.getElementById("comentario").value;

	
	
	if (nombre == "" ){
		alert("Por favor, escriba su nombre");
		return false;
	}
	
	else if(!isNaN(nombre)){
		alert("El nombre es incorrecto");
		return false;
	}

	if (email == ""){
		alert("Favor de escribir un correo válido");
		return false;
	}
	
	if (edad == ""){
		alert("Escribe tu edad");
		return false;
	}
	
	if (comentario == ""){
		alert("Favor de escribir un comentario");
		return false;
	}
	
	else if(nombre.length>15){
		alert("El nombre no debe de exceder de 15 carácteres");
		return false;
	}
	
	else if(email.length>30){
		alert("El correo es muy largo");
		return false;
	}
	else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(Correo)){
		alert("El correo no es válido");
		return false;
	}
	
	else if(edad.length>3){
		alert("La edad no es correcta");
		return false;
	}


	else if(comentario.length>255){
		alert("El comentario no debe de exceder de 255 carácteres");
		return false;
	}
}
