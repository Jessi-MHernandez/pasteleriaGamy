function validarmod(){
	
	var Tipo = document.getElementById("Tipo").value;
	var Nombrenew = document.getElementById("Nombrenew").value;
	
	if (Tipo == "" ){
		alert("Por favor, escriba el tipo de producto");
		return false;
	}
	
	else if(!isNaN(Tipo)){
		alert("El nombre del producto es incorrecto");
		return false;
	}
	
	else if(Tipo.length>23){
		alert("El tipo de producto no debe de exceder de 23 carácteres");
		return false;
	}
	
if (Nombrenew == "" ){
		alert("Por favor, escriba el nuevo de producto");
		return false;
	}
	
	else if(!isNaN(Nombrenew)){
		alert("El nombre del producto es incorrecto");
		return false;
	}
	
	else if(Nombrenew.length>23){
		alert("El tipo de producto no debe de exceder de 23 carácteres");
		return false;
	}
	
	}