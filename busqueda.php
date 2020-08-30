<html lang="es-MX">
	<head>
	<title> Resultados Productos</title>
			<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="CSS/estilo.css" type="text/css" rel="stylesheet">	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="JS\validarbuscar.js"></script>	
	</head>
<body bgcolor="#FFF8DC">

	<table width=100% background="images/fondo.jpeg">
		<tr>
			<td>
				<div id="encabezado" >
					<IMG SRC="images/pgamy1.png" WIDTH=210>
				</div>
			</td>
	
			<td>
				<div id="encabezado2">
					<center><h3> Pastelería de vanguardia para tu evento</h3> </center>
				</div>
			</td>
			
			<td>
		<form action="busqueda.php" method="POST">
				<input type="search"  name="nombre" size="5%" align="left" placeholder="Buscar..." style=" width: 55%; padding: 9px 10px 9px 30px; border-radius: 18em; transition: all .5s; /* transición de .5seg a todos los elementos*/
				outline: none; /* ocultar el fucos automático de los input */  color: #000;  background-color: #FFF;">
		</form>
			</td>
		</tr>
	</table>

	<header>
	<nav class="navbar navbar-inverse" style="background-color:#fffccc; font-family:Helvetica Neue; font-size:18;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.html">Inicio</a></li>
		 <li><a href="empresa.html">Quiénes Somos</a></li>
        <li class="dropdown">
		 <a class="dropdown-toggle" data-toggle="dropdown" >Productos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pasteles.php">Pasteles</a></li>
            <li><a href="gelatinas.php">Gelatinas</a></li>
          </ul>
        </li>
         <li><a href="promociones.html">Promociones</a></li>
		   <li><a href="contac.html">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table table-responsive">
		             <table id="mytable" class="table table-bordred table-striped">
                   
	<?php 
		
       	require_once 'conecta.php';
		mysqli_set_charset($conecta, "UTF8");
		
		$nombre=$_POST['nombre'];
		$sql="select * from productos where Tipo like '%$nombre%' or Sabor like '%$nombre%'";
		$resultado=mysqli_query($conecta, $sql);
		echo "<thead>
				<tr>
					<td>Producto</td>
					<td>Sabor</td>
					<td>Descripción</td>
					<td>Precio</td>
				</tr>
				
			  </thead><tbody>";
			while ($columna = mysqli_fetch_array( $resultado ))
				{
					echo "<tr>";
					echo "<td>" . $columna['Tipo'] . "</td><td>" . $columna['Sabor'] . "</td><td>" . $columna['Descripcion'] . "</td><td>".$columna['Precio']. "</td>";
					echo "</tr>";
				}
	    
		echo "</tbody></table>";
	echo"</center>";
	?>
	</table>
	</div>
	</div>
	</div>
	</div>
	
<footer>
<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse"style="background-color:#fffccc; font-family:Helvetica Neue;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-2">
				<span class="sr-only">Activar navegación inferior</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
					<a class="navbar-brand">Visítanos en un horario de:
						<br>Lunes-Domingo 10:00am - 9:00 pm<br>
					<img style="float:left;"src="images/ubicacion.png" width="2%">Emilio Carranza No. 11, Tlaxcala de Xicohténcatl</a>
			 <br>
<div class="collapse navbar-collapse" id="barra-2"><br>
<br><ul class="nav navbar-nav"><br>
			<li class="active"><a href="políticas/aviso.pdf ">Aviso de privacidad</a></li>
					<li ><a href="políticas/tyc.pdf ">Términos y condiciones</a></li>
					<li><div class="opacity"><a target="_blank" href=" calculadora.html"><img class="efectors" style="float:left; margin:8px; width:40px; height:40px;" alt="" src="images/calculadora.png" title="Calcula el precio de tu pastel o gelatina preferida"/> </a></div></li>
					<li><div class="opacity"><a target="_blank" href="https://www.facebook.com/Pasteler%C3%ADas-Gamy-295254067270369/"><img class="efectors" style="float:left; margin:8px; width:35px; height:35px;" alt="" src="images/fb.png"  title="Visita nuestra página de facebook: Pastelería Gamy"  /> </a></div></li>
					<li><div class="opacity"><a target="_blank" href="01 246 461 1371"><img class="efectors" style="float:left; margin:8px; width:40px; height:40px;" alt="" src="images/wA.png" /></a></div></li></ul>
					<p class="navbar-text navbar-right"><a href="login.html">&copy; </a> 2018 - Pastelería Gamy</p>
</div>
</div>
</nav>

</footer>	
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>