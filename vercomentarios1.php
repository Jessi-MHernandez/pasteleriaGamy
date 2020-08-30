<html>
	<head>
<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	
?>
	<title> Comentarios </title>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link href="CSS/registro.css" type="text/css" rel="stylesheet">	
			<link href="CSS/estilo.css" type="text/css" rel="stylesheet">	
		<script type="text/javascript" src="JS\validarprod.js"></script>
	</head>
	
<body  background="#FFF8DC">
<table width=100% background="images/fondo.jpeg" >
		<tr>
			<td>
				<div id="encabezado" >
				<img src="images/pgamy1.png" width="210px">
					
				</div>
			</td>
	
			<td>
				<div id="encabezado2">
					<center> <h3>Pastelería de vanguardia para tu evento</h3> </center>
				</div>
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
       <li class="dropdown">
		 <a class="dropdown-toggle" data-toggle="dropdown" >Productos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ver1.php">Ver</a></li>
            <li><a href="registrarproductos1.php">Registrar</a></li>
			<li><a href="reporteproductos.php">Reporte</a></li>
          </ul>
        </li>
	  <li class="dropdown">
		 <a class="dropdown-toggle" data-toggle="dropdown" >Comentarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="vercomentarios1.php">Ver</a></li>
			<li><a href="reportecomentarios.php">Reporte</a></li>
           </ul>
        </li>
	 <li class="dropdown">
	 <a class="dropdown-toggle" href="salir.php">Cerrar Sesión <span class="caret"></span></a>
		
     </li>
       </ul>
    </div>
  </div>
</nav>

	</header>

<body>

	<div class="container">

		<div class="col-md-12">

		<table class="table table-responsive table-striped">
	<?php
		
       	require_once 'conecta.php';
		mysqli_set_charset($conecta, "UTF8");
		
	
		$sql="select * from comentario ";
		$resultado=mysqli_query($conecta, $sql);
		echo "<thead> <tr> 
						<td>ID</td>
						<td>Asunto</td>
						<td>Nombre</td>
						<td>Email</td>
						<td>Edad</td>
						<td>Comentarios</td>
						
					   </tr>
			   </thead><tbody>";
			while ($columna = mysqli_fetch_array( $resultado ))
					{
					
					?>
					
			<tr>
				<td><?php echo $columna['idComentario']?></td>
				<td><?php echo $columna['Asunto']?></td>
				<td><?php echo $columna['Nombre']?></td>
				<td><?php echo $columna['Email']?></td>
				<td><?php echo $columna['Edad']?></td>
				<td><?php echo $columna['Comentarios']?></td>
				
				<th><a class="btn btn-danger btn-sm" href="eliminarcomentarios.php?idx=<?php echo $columna ['idComentario']; ?>"><span class="glyphicon glyphicon-trash"> Eliminar </span></a></th>
			</tr>
					<?php
					//echo "<tr>";
					//echo"<thead>";
					//echo "<td>" . $columna['idProducto'] . "</td><td>" . $columna['Tipo'] . "</td><td>" . $columna['Sabor'] . "</td><td>".$columna['Descripcion'].
					//"</td><td>".$columna['Precio']."</td><td>".$columna['Imagen'].
				//"</td><td><a href='modificacion.php?idx=".$columna['idProducto']."'>Editar</a> </td>";
					//echo"</thead>";				
					//echo "</tr>";
				}
	
	?>
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
					
<div class="collapse navbar-collapse" id="barra-2"><br>
<br><ul class="nav navbar-nav"><br>
	<p class="navbar-text navbar-right">&copy; 2018 - Pastelería Gamy</p>
</div>
</div>
</nav>

</footer>	
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
