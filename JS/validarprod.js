function validarprod(){
	
	var Tipo = document.getElementById("Tipo").value;
	var Sabor = document.getElementById("Sabor").value;
	var Descripcion = document.getElementById("Descripcion").value;
	var Precio = document.getElementById("Precio").value;

	
	
	if (Tipo == "" ){
		alert("Por favor, escriba el tipo de producto");
		return false;
	}
	
	else if(!isNaN(Tipo)){
		alert("El nombre del producto es incorrecto");
		return false;
	}

	if (Sabor == ""){
		alert("Favor de escribir el sabor del producto");
		return false;
	}
	
	if (Descripcion == ""){
		alert("Escribe una breve descripción del producto");
		return false;
	}
	
	if (Precio == ""){
		alert("Favor de escribir el precio del producto");
		return false;
	}
	
	else if(Tipo.length>23){
		alert("El tipo de producto no debe de exceder de 23 carácteres");
		return false;
	}
	
	else if(Sabor.length>25){
		alert("El sabor del producto es muy largo");
		return false;
	}
	
	else if(Precio.length>3){
		alert("El precio no es correcto");
		return false;
	}


	else if(Descripcion.length>170){
		alert("La descripción del producto no debe de exceder de 170 carácteres");
		return false;
	}
	
	
	else if(isNaN(Precio)){
		alert("El precio es incorrecto");
		return false;
}

	}
