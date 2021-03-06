<html>
	<head>
	<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	
?>
	<title> Registro de productos </title>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link href="CSS/registro.css" type="text/css" rel="stylesheet">	
			<link href="CSS/estilo.css" type="text/css" rel="stylesheet">	
		<script type="text/javascript" src="JS/validarprod.js"></script>
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
            <li class="active"><a href="registrarproductos1.php">Registrar</a></li>
			<li><a href="reporteproductos.php">Reporte</a></li>
          </ul>
        </li>
	  <li class="dropdown">
		 <a class="dropdown-toggle" data-toggle="dropdown" >Comentarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vercomentarios1.php">Ver</a></li>
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
<center>
	<div>
	<form action="registrarproductos.php" method="POST" onsubmit="return validarprod();" enctype="multipart/form-data">
		
<div class="form-horizontal">
				<div class="col-sm-10">
				<div class="form-group">
					<label class="col-sm-4 control-label"> Tipo de productos </label>
			 <div class="col-sm-8"><select name="Tipo" class="form-control" title="Selecciona una opción" required>
				<option>Pastel</option>
				<option>Gelatina</option>
				</select>
				</div>
			  </div>
		
		<div class="form-group">
			<label class="col-sm-4 control-label"> Sabor  </label> 
				<div class="col-sm-8">
					<input type ="text" name="Sabor"  class="form-control" id="Sabor"pattern="[a-zA-Z]{3,25}" title="Determina el sabor del producto" placeholder="Durazno"required>
			     </div>
		</div>
	
		<div  class="form-group"> 
			<label class="col-sm-4 control-label"> Descripción </label>
				<div class="col-sm-8"> 
					<input type ="text" name="Descripcion"  class="form-control" id="Descripcion" maxlength="170"  title="Escribe una breve descripción del producto" placeholder="Relleno, medidas, porción " required>
			     </div>
		</div>
		
		<div  class="form-group"> 
			<label  class="col-sm-4 control-label"> Precio </label>
				<div class="col-sm-8"> 
					<input type ="number" name="Precio" min="0" class="form-control" id="Precio" pattern="[0-9]{3}" maxlength="3" title="Escribe el precio correctamente" placeholder="243" required> 
			     </div>
		</div>		
		
		<div class="form-group">
			<label class="col-sm-4 control-label"> Imagen</label>
				<div class="col-sm-8">
					<input type="file" name="Imagen" class="form-control" id="Imagen" required>
				</div>
		</div>
		<center>
			<td width=100%><input class="button" type="submit" name="btnenviar" value="Enviar"></td>		
			<td width=100%><input class="button" type="reset" name="btncancelar" value="Cancelar"></td>
		</center>	
		</tr>

	</div>
	</div>
		</form>
	</center>
	<br>
<br>
<br>
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