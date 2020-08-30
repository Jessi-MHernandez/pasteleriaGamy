<?php
	session_start();
	if(!isset($_SESSION["user"])) 
	header("location: login.html");
	

	
  include_once 'fpdf.php';
	require_once 'conecta.php';
	
	$pdf=new FPDF();
	$pdf-> AddPage();
	
	$pdf->SetTitle('Comentarios');
	$pdf->SetTopMargin(20);
	
	$pdf->Cell(40);	
	$pdf->image('images/pgamy1.png', 10,10,35,20);
	
	$pdf->SetFont('Arial', '', 10);
	
		//Título
    $pdf->Cell(160,5,'Reporte de comentarios con fecha:     ' .date('d/m/Y'),7,5,'C');
  	
    $conecta = mysqli_connect($server,$usuario,$password,$base);
			 mysqli_set_charset($conecta, "UTF8");
	if($resultado = mysqli_query($conecta, "SELECT * FROM comentario")){
	
	while($row=mysqli_fetch_array($resultado)){
	
	$pdf->Cell(150,7,($row['idComentario']),6,5,'C');
	$pdf->Cell(150,7,utf8_decode($row['Asunto']),1,5,'L');
	$pdf->Cell(150,7,utf8_decode($row['Nombre']),1,5,'L');
	$pdf->Cell(150,10,utf8_decode($row['Email']),1,5,'L');
	$pdf->Cell(150,7,($row['Edad']),1,5,'L');
	$pdf->Cell(150,10,utf8_decode($row['Comentarios']),1,5,'L');
	}
	mysqli_free_result($resultado);
	}

	$pdf->OutPut();
?>
	