<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	
       	require_once 'conecta.php';
			$idProducto=intval($_GET['idx']);
			$sql = mysqli_query($conecta, "SELECT * FROM productos WHERE idProducto='$idProducto'");
			if(mysqli_num_rows($sql) == 0){
			
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
	
		$sql="DELETE from productos WHERE idProducto = '$idProducto'" ;
		$resultado=mysqli_query($conecta, $sql);
		if($resultado){
			
			echo"<script type=\"text/javascript\"> alert('El producto se eliminó exitosamente! '); window.location='http://127.0.0.1/pasteleria/adm.php';</script>"; 		
		}
		else{
		echo"<script type=\"text/javascript\"> alert('Error en la eliminación. '); window.location='http://127.0.0.1/pasteleria/adm.php';</script>"; 		
		}
	?>
			
		
			