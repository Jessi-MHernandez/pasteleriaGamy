
		<?php
		
       	require_once 'conecta.php';
		mysqli_set_charset($conecta, "UTF8");
			$Asunto=$_POST['Asunto'];
			$Nombre=$_POST['Nombre'];
			$Email=$_POST['Email'];
			$Edad=$_POST['Edad'];
			$Comentarios=$_POST['Comentarios'];
		 
		$sql="INSERT INTO comentario (Asunto, Nombre, Email, Edad, Comentarios) VALUES ('$Asunto','$Nombre','$Email','$Edad','$Comentarios')";
		$resultado=mysqli_query($conecta, $sql);
		if($resultado){
			
		echo"<script type=\"text/javascript\"> alert('Tu comentario se registro exitosamente!. Volverás a la página principal'); window.location='http://127.0.0.1/pasteleria/index.html';</script>"; 			    
		}
		else{
		echo"<script type=\"text/javascript\"> alert('ERROR EN TU COMENTARIO'); window.location='http://127.0.0.1/pasteleria/contac.html';</script>"; 	
		}
	?>
