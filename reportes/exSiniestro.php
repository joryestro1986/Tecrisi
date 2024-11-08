<?php
//Activamos el almacenamiento en el buffer
ob_start();
if (strlen(session_id()) < 1) 
  session_start();

if (!isset($_SESSION["nombre"]))
{
  echo 'Debe ingresar al sistema correctamente para visualizar el reporte';
}
else
{
if ($_SESSION['siniestros']==1)
{
	

require ('../fpdf184/fpdf.php');
  //Incluímos la clase Venta
 
 
//Obtenemos los datos de la cabecera de la venta actual
require_once "../modelos/Tragico.php";
$tragico= new Tragico();
$rsptav = $tragico->ventareportsin($_GET["idmovint"]);
$reg = $rsptav->fetch_object();


//$pdf = new FPDF('P','mm','Letter'); 

$pdf = new FPDF('P','mm',array(279,216)); 
//$pdf->AliasNbPages();
//$pdf->AddPage();

 
 
$pdf->setFont('Arial', 'B', 16);
	//$pdf->Cell(100,6,'LISTA DE PRODUCTOS',1,0,'C');
	//realizacion del cuadro de dialogo
	$pdf->Ln(0);
	//BORDE A LA PAGUINA
	$pdf->Cell(201, 260,'', 0, 0, 'C');
	$pdf->Ln(5);
	
	$image ="../reportes/LOGO_TECRISI.png";
	//$pdf->Image($image, 80 ,22, 35 , 38,'JPG');
	$pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');
	 
	
	$pdf->Cell(130, 1,utf8_decode( $reg->nombreseg ), 0, 1, 'C', 0);
	$pdf->Ln(11);

$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(340, 8,utf8_decode( $reg->nombre), 0, 1, 'C', 0);
	$pdf->Cell(225, 1,utf8_decode('MEXICO, CDMX,   '. $reg->fechareporte), 0, 1, 'C', 0);
		$pdf->Ln(1);
//	$pdf->setFont('Arial', 'B', 9);
//	$pdf->Cell(90, 3,utf8_decode('SINIESTRO: '. $reg->siniestro), 0, 1, 'C', 0);
			$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(25, 1,utf8_decode('SINIESTRO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(100, -3,utf8_decode(  $reg->siniestro ), 0,1, 'C', 0);

	
		$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(213, 8,utf8_decode('FECHA SINIESTRO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(265, -7,utf8_decode(  $reg->fechasiniestro ), 0,1, 'C', 0);

//	$pdf->Cell(225, 1,utf8_decode('FECHA SINIESTRO:   '. $reg->fechasiniestro), 0, 1, 'C', 0);
	$pdf->Ln(5);


	$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(20, 3,utf8_decode('POLIZA :'), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(70, -3,utf8_decode(  $reg->poliza ), 0,1, 'C', 0);
		$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(200, 3,utf8_decode('REPORTO :'), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(280, -3,utf8_decode(  $reg->reporta ), 0,1, 'C', 0);
	
	$pdf->Ln(2);
	$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(139, 6,utf8_decode('CRISTALES :'), 0, 1, 'C', 0);
	$pdf->setFont('Arial', '', 9);
	$pdf->Cell(240, -5,utf8_decode( $reg->cristales ), 0,1, 'C', 0);
	$pdf->Ln(8);
	
$pdf->setFont('Arial', 'B', 15);
	//$pdf->Cell(175, 3,utf8_decode( $reg->asegurado ), '', 0, 'L'); 
	$pdf->Multicell(175,6,utf8_decode($reg->asegurado ), 0, 'C');
	$pdf->Ln(4);
$pdf->setFont('Arial', 'B', 11);	
	$pdf->Cell(200, 6,utf8_decode( 'F.MEDICION ____________' ), '', 0, 'R', 0); 
		$pdf->Ln(7);
	$pdf->Cell(200, 6,utf8_decode( 'DAÑO EN ___ PISO           ' ), '', 0, 'R', 0); 
	$pdf->Ln(7);
	$pdf->Cell(200, 6,utf8_decode( 'EDIFICIO DE ___ PISOS   ' ), '', 0, 'R', 0); 
	$pdf->Ln();
$pdf->setFont('Arial', 'B', 12);
	$pdf->Cell(200, 6,'NO INCLUYE MEJORAS NI MANTENIMIENTO     ', '', 0, 'R', 0); 
	$pdf->Ln();




	$pdf->setFont('Arial', 'B', 9);
	 $pdf->Cell(25, 5,utf8_decode('DIRECCION :'), 0, 0, 'L', 0);
	$pdf->setFont('Arial', '', 9);
	 $pdf->Cell(105, 5,utf8_decode($reg->calle), 0, 1, 'L', 0); 

	$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(15, 5,utf8_decode('COL : '), 0, 0, 'L', 0);
	 $pdf->setFont('Arial', '', 9);
	$pdf->Cell(45, 5,utf8_decode($reg->colonia), 0, 1, 'L', 0); 
		$pdf->setFont('Arial', 'B', 9);
		
	$pdf->Cell(35, 5,utf8_decode('ALCALDIA O MUN : '), 0, 0, 'L', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(17, 5,utf8_decode( $reg->alcandiamupio), 0, 1, 'L', 0); 
	
	 $pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(18, 5,utf8_decode('ESTADO : '), 0, 0, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	$pdf->Cell(29, 5,utf8_decode( $reg->estado), 0, 1, 'C', 0); 
	

	//$pdf->Cell(80,6,'PRUEBA','LR',1,'C',0);
	//$pdf->Ln(1);
	//$pdf->Cell(80,6, 'PRUEBA1','LR',0,'L',0);
	$pdf->Ln(1);
	
	$pdf->setFont('Arial', 'B', 9);
			$pdf->Cell(18, 5,utf8_decode('ATIENDE : '), 0, 0, 'C', 0);
			$pdf->setFont('Arial', '', 9);
	$pdf->Cell(70, 5,utf8_decode( $reg->atiendeasegurado), 0, 1, 'C', 0); 

$pdf->setFont('Arial', 'B', 9);	
	$pdf->Cell(21, 5,utf8_decode('TELEFONO : '), 0, 0, 'C', 0);
	$pdf->setFont('Arial', '', 9);
	$pdf->Cell(55, 5,utf8_decode( $reg->telefonot), 0, 1, 'C', 0); 
	
	$pdf->setFont('Arial', 'B', 9);
	$pdf->Cell(18, 5,utf8_decode('CORREO : '), 0, 0, 'C', 0);
	$pdf->setFont('Arial', '', 9);
	$pdf->Cell(70, 5,utf8_decode( $reg->correo), 0, 1, 'C', 0); 

		$pdf->Ln(1);
	//$pdf->Cell(190, 2,utf8_decode('MIDIO:     '. 'VALOR '. '           ATENDIÓ: ' .$reg->atiende), '', 0, '', 0);
	//$pdf->Cell(180, 1,utf8_decode('ATENDIÓ:   ' .$reg->atiende), '', 0, 'R', 0); 
	
				$pdf->Cell(16, 2,utf8_decode('MIDIO : '), 0, 0, 'C', 0);
	$pdf->Cell(100, 4,utf8_decode( '____________________________________________________________ '), 0, 0, 'C', 0); 
	
		
				$pdf->Cell(40, 2,utf8_decode('ATENDIÓ : '), 0, 1, 'C', 0);
			$pdf->Cell(310, -2,utf8_decode( $reg->atiende), 0, 0, 'C', 0); 
	
	$pdf->Ln(3);
	

$pdf->Cell(20,6, 'PIEZAS',1,0,'C',0); 
$pdf->Cell(110,6, 'MEDIDAS',1,0,'C',0); 
$pdf->Cell(41,6, 'TIPO DE CRISTAL',1,0,'C',0); 
$pdf->Cell(30,6, 'AREA',1,0,'C',0); 
	$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
	$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
	$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
	$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0);  
	$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
	$pdf->Ln();
  
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 

$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();

$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();
$pdf->Cell(20,6, '',1,0,'C',0); 
$pdf->Cell(110,6, '',1,0,'C',0); 
$pdf->Cell(41,6, '',1,0,'C',0); 
$pdf->Cell(30,6, '',1,0,'C',0); 
$pdf->Ln();

 
 

$pdf->Cell(0.1, 8,utf8_decode('OBSERVACIONES'), '', 0, 'L', 0); 
$pdf->Cell(201,21, '',1,0,'L',0); 

$pdf->Ln();
$pdf->Cell(0.1, 8,utf8_decode(''), '', 0, 'L', 0); 
$pdf->Cell(201,12, utf8_decode('  <<====== ÁREA DE DIBUJO AL REVERSO DE LA PAGUINA =====>>'),1,0,'C',0); 
$pdf->Ln();

	$pdf->Cell(80, 6,utf8_decode('NOMBRE DEL MAESTRO COLOCADOR(TECRISI): ') , 0, 1, 'C', 0); 
	$pdf->Cell(214, -6,utf8_decode($reg->maestro_colocador ), 0, 1, 'C', 0); 
	$pdf->Cell(285, 8,utf8_decode( '____________________________________________________________________ '), 0, 0, 'C', 0); 
		

 
$pdf->Output($reg->siniestro. '.pdf','I');
//$pdf->Output('//vimolamexserver/Server/2024/'.$reg->siniestro.'.pdf',"F"); 
//$pdf->Output($regv->siniestro.'-'.pdf','I');
//$pdf->Output($regv->siniestro,'I');

}
else
{
  echo 'No tiene permiso para visualizar el reporte';
}

}
ob_end_flush();
?>