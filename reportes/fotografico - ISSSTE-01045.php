

<?php
//Activamos el almacenamiento en el buffer
/*ob_start();
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
	*/

require ('../fpdf184/fpdf.php');
  //Incluímos la clase Venta
  
  //$pdf = new FPDF('P','mm','Letter'); 

$pdf = new FPDF('P','mm',array(279,216)); 
//$pdf->AliasNbPages();
//$pdf->AddPage();


 
 
//Obtenemos los datos de la cabecera de la venta actual
require_once "../modelos/Tragico.php";
$tragico= new Tragico();
//$rsptav = $tragico->ventareportsin($_GET["idmovint"]);
//$reg = $rsptav->fetch_object();

$pdf->setFont('Arial', 'B', 16);
	//$pdf->Cell(100,6,'LISTA DE PRODUCTOS',1,0,'C');
	//realizacion del cuadro de dialogo
	$pdf->Ln(0);
	//BORDE A LA PAGUINA
	$pdf->Cell(201, 260,'', 0, 0, 'C');
	$pdf->Ln(5);
	
	
		$asegurado ="INSTITUTO DE SEGURIDAD Y SERVICIOS SOCIALES DE LOS TRABAJADORES DEL ESTADO";
		$siniestro="SHCP_P04_ISSSTE-01045 2023";
		$DirecTecrisi="Escuela Naval Militar 548 col. San Francisco Culhuacán CP. 04420 alcaldía Coyoacán";
	
	$image ="../reportes/LOGO_TECRISI.png";
	//$pdf->Image($image, 80 ,22, 35 , 38,'JPG');
	////variables
	///detalle PDF
	
	
	
	
$ima1 ="../fotografico/Pic_2.jpeg";
$ima2 ="../fotografico/Pic_3.jpeg";
$ima3 ="../fotografico/Pic_4.jpeg";
$ima4 ="../fotografico/Pic_5.jpeg";






   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima1, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima2, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima3, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima4, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);

  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);


//$pdf->Output($reg->siniestro. '.pdf','I');
//$pdf->Output('Reportefoto.pdf','I');
//$pdf->Output('//vimolamexserver/Server/2024/'.$reg->siniestro.'.pdf',"F"); 
$pdf->Output($siniestro. '.pdf','I');
//$pdf->Output($regv->siniestro,'I');
/*
}
else
{
  echo 'No tiene permiso para visualizar el reporte';
}

}
ob_end_flush();
*/
?>