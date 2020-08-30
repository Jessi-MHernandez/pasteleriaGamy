function validarbuscar(){
	
	var Tipo = document.getElementById("Tipo").value;
	var Sabor = document.getElementById("Sabor").value;
	
	
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
	
	else if(Tipo.length>23){
		alert("El tipo de producto no debe de exceder de 23 carácteres");
		return false;
	}
	
	else if(Sabor.length>15){
		alert("El sabor del producto es muy largo");
		return false;
	}
	}