
<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	


       	require_once 'conecta.php';
			$Tipo=$_POST['Tipo'];
			$Sabor=$_POST['Sabor'];
			$Descripcion=$_POST['Descripcion'];
			$Precio=$_POST['Precio'];
			$Imagen= addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

			
		$sql="INSERT INTO productos (Tipo, Sabor, Descripcion, Precio, Imagen) VALUES('$Tipo','$Sabor','$Descripcion','$Precio', '$Imagen')";
		
		$resultado=mysqli_query($conecta, $sql);
		if($resultado){
		
		echo"<center>" ;
		echo"<script type=\"text/javascript\"> alert('Tu REGISTRO  ha sido exitoso. Volverás a la página principal');
		window.location='http://127.0.0.1/pasteleria/adm.php';</script>"; 	

		echo "</center>";
		
		}
		else{
	echo"<script type=\"text/javascript\"> alert('Error en el registro. '); 
	window.location='http://127.0.0.1/pasteleria/registrarproductos1.php';</script>"; 	
	
		}
	
?>
