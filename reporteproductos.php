<?php

	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	


  include_once 'fpdf.php';
	require_once 'conecta.php';
	
	$pdf=new FPDF();
	$pdf-> AddPage();
	
	$pdf->SetTitle('Productos');
	$pdf->SetTopMargin(20);
	
	$pdf->Cell(40);	
	$pdf->image('images/pgamy1.png', 10,10,35,20);
	
	$pdf->SetFont('Helvetica', '', 10);

		//Título
    $pdf->Cell(160,5,'Reporte de productos con fecha:     ' .date('d/m/Y'),7,5,'C');
  	
	$conecta = mysqli_connect($server,$usuario,$password,$base);
			mysqli_set_charset($conecta, "UTF8");
	if($resultado = mysqli_query($conecta, "SELECT * FROM productos")){
	
	while($row=mysqli_fetch_array($resultado)){

	$pdf->Cell(150,7,($row['idProducto']),6,5,'C');
	$pdf->Cell(150,7,utf8_decode($row['Tipo']),1,5,'L');
	$pdf->Cell(150,7,utf8_decode($row['Sabor']),1,5,'L');
	$pdf->Cell(150,10,utf8_decode($row['Descripcion']),1,5,'L');
	$pdf->Cell(150,7,($row['Precio']),1,5,'L');
	}
	mysqli_free_result($resultado);
	}

	$pdf->OutPut();
?>