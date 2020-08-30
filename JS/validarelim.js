function validarelim(){
	
	var idProducto = document.getElementById("idProducto").value;

	
	
	if (idProducto == "" ){
		alert("Por favor, escriba el id del producto");
		return false;
	}
	else if(idProducto.length>2){
		alert("El id no es correcto");
		return false;
	}
		
	else if(isNaN(idProducto)){
		alert("El id es incorrecto");
		return false;
}
	}