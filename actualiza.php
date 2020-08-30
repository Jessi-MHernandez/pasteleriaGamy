
<?php
	session_start();
	

include "conecta.php";
mysqli_set_charset($conecta, "UTF8");
if(isset($_POST['update'])){
				$idProducto	= intval($_POST['idProducto']);
				$Tipo= mysqli_real_escape_string($conecta,(strip_tags($_POST['Tipo'], ENT_QUOTES)));
				$Sabor = mysqli_real_escape_string($conecta,(strip_tags($_POST['Sabor'], ENT_QUOTES)));
				$Descripcion = utf8_decode(mysqli_real_escape_string($conecta,(strip_tags($_POST['Descripcion'], ENT_QUOTES))));
				$Precio = mysqli_real_escape_string($conecta,(strip_tags($_POST['Precio'], ENT_QUOTES)));
		

			
				
				$update = mysqli_query($conecta, "UPDATE productos SET Tipo='$Tipo', Sabor='$Sabor', Descripcion='$Descripcion', Precio='$Precio' WHERE idProducto='$idProducto'") or die(mysqli_error());
				if($update){
					echo "<script>alert('Los datos han sido actualizados!'); window.location = 'http://127.0.0.1/pasteleria/adm.php'</script>";
				}else{
					echo "<script>alert('Error, no se pudo actualizar los datos'); window.location = 'http://127.0.0.1/pasteleria/adm.php'</script>";
				}
			}
  ?>

