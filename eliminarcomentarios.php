<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");

      	require_once 'conecta.php';		
		
			$idComentario=intval($_GET['idx']);
			$sql = mysqli_query($conecta, "SELECT * FROM comentario WHERE idComentario='$idComentario'");
			if(mysqli_num_rows($sql) == 0){
			
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
	
		$sql="DELETE from comentario WHERE idComentario = '$idComentario'" ;
		$resultado=mysqli_query($conecta, $sql);
		if(!$resultado){
			echo"<script type=\"text/javascript\"> alert('Error en la eliminación del comentario. '); window.location='http://127.0.0.1/pasteleria/vercomentarios1.php';</script>"; 		
		}
		else{
				echo"<script type=\"text/javascript\"> alert('El comentario se eliminó exitosamente!. '); window.location='http://127.0.0.1/pasteleria/vercomentarios1.php';</script>"; 		
		}
	?>
						
			