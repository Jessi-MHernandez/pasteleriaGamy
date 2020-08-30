<html>
	
	
    <?php
	session_start();
	include("conecta.php");
			mysqli_set_charset($conecta, "UTF8");?>
    
	<title> Modificación </title>
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
            <!-- /navbar-inner -->
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
			mysqli_set_charset($conecta, "UTF8");
           $idProducto = intval($_GET['idx']);
			$sql = mysqli_query($conecta, "SELECT * FROM productos WHERE idProducto='$idProducto'");
			if(mysqli_num_rows($sql) == 0){
			
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
            <body>
        
                          <form action="actualiza.php" method="POST" onsubmit="return validarprod();" >                        		
                       		        <div class="form-group">
									<label for="id">ID Producto:</label>
                       		        <input  id="idProducto" class="form-control" name="idProducto" value="<?php if(isset($row['idProducto'])) echo $row['idProducto'];?>" type="text" readonly="readonly"></input> 
									</div>									
		                       		<div class="form-group">
										<label for="Tipo">Tipo de producto</label>
									<select name="Tipo" id="Tipo" class="form-control"  value="<?php echo $row['Tipo']; ?>"required>
										<option>Pastel</option>
										<option>Gelatina</option>
									</select>
									</div>
									
									<div class="form-group">
		                       			<label for="Sabor">Sabor:</label>
		                       			<input class="form-control" id="Sabor" name="Sabor" type="text" value="<?php echo $row['Sabor']; ?>" pattern="[a-zA-Z]{3,25}" title="Determina el sabor del producto"required></input>
		                       		</div>
		                       		
									<div class="form-group">
		                       			<label for="Descripcion">Descripción:</label>
		                       			<input class="form-control" id="Descripcion" name="Descripcion" maxlength="170" type="text" value="<?php echo $row['Descripcion']; ?>" required></input>
		                       		</div>
									<div class="form-group">
		                       			<label for="Precio">Precio:</label>
		                       			<input class="form-control" id="Precio" name="Precio" min="0" type="number" pattern="[0-9]{3}" maxlength="3" value="<?php echo $row['Precio']; ?>" required></input>
		                       		</div>
									
									
										<label for="Imagen">Imagen:</label>
										<img width="9%" src="data:images/png;base64, <?php echo base64_encode($row['Imagen']); ?> " readonly="readonly"/>
								
										
									<div class="control-group">
											<div class="controls">
												<input type="submit" name="update" id="update" value="Actualizar" class="button"/>
                                               <a href="http://127.0.0.1/pasteleria/adm.php" class="button">Cancelar</a>
											</div>
										</div>	
                      </form>
 				                </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
  
      

	</body>
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
	