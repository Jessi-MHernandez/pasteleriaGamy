<html>	
	<head>
		<title>Comprobacion</title>
	</head>

<?php
	session_start();
		
	include 'conecta.php';
	
		
		if(!empty($_POST)){
			$user=$_POST['user']; 
			$pass=$_POST['pass'];
		
	$sql=mysqli_query($conecta,"SELECT * FROM login WHERE user='$user' AND pass='$pass'");
				
			if($sql->num_rows>0){
				while($row = mysqli_fetch_array($sql)){
					session_start();
					
					$_SESSION['user'] = $row['user'];
					$_SESSION['id'] = $row['id'];
					header("Location: adm.php");
					}
				
			}else{
				echo '<script language="javascript"> alert("Intentalo de nuevo"); </script>';
				
				echo "<script> location.href='login.html'</script>";
			}
		
			
		} else{
			echo "Los campos no se deben dejar vacio. <a href='javascript:history.back();'> Reintentar </a>";
		}
		
?>
