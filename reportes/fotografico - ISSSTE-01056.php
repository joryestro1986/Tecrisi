

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
		$siniestro="SHCP_P04_ISSSTE-01056 2023";
		$DirecTecrisi="Escuela Naval Militar 548 col. San Francisco Culhuacán CP. 04420 alcaldía Coyoacán";
	
	$image ="../reportes/LOGO_TECRISI.png";
	//$pdf->Image($image, 80 ,22, 35 , 38,'JPG');
	////variables
	///detalle PDF
	
	
	
	
$ima1 ="../fotografico/Pic_2.jpeg";
$ima2 ="../fotografico/Pic_3.jpeg";
$ima3 ="../fotografico/Pic_4.jpeg";
$ima4 ="../fotografico/Pic_5.jpeg";
$ima5 ="../fotografico/Pic_6.jpeg";
$ima6 ="../fotografico/Pic_7.jpeg";
$ima7 ="../fotografico/Pic_8.jpeg";
$ima8 ="../fotografico/Pic_9.jpeg";
$ima9 ="../fotografico/Pic_10.jpeg";
$ima10 ="../fotografico/Pic_11.jpeg";
$ima11 ="../fotografico/Pic_12.jpeg";
$ima12 ="../fotografico/Pic_13.jpeg";
$ima13 ="../fotografico/Pic_14.jpeg";
$ima14 ="../fotografico/Pic_15.jpeg";
$ima15 ="../fotografico/Pic_16.jpeg";
$ima16 ="../fotografico/Pic_17.jpeg";
$ima17 ="../fotografico/Pic_18.jpeg";
$ima18 ="../fotografico/Pic_19.jpeg";
$ima19 ="../fotografico/Pic_20.jpeg";
$ima20 ="../fotografico/Pic_21.jpeg";
$ima21 ="../fotografico/Pic_22.jpeg";
$ima22 ="../fotografico/Pic_23.jpeg";
$ima23 ="../fotografico/Pic_24.jpeg";
$ima24 ="../fotografico/Pic_25.jpeg";
$ima25 ="../fotografico/Pic_26.jpeg";
$ima26 ="../fotografico/Pic_27.jpeg";
$ima27 ="../fotografico/Pic_28.jpeg";
$ima28 ="../fotografico/Pic_29.jpeg";
$ima29 ="../fotografico/Pic_30.jpeg";
$ima30 ="../fotografico/Pic_31.jpeg";
$ima31 ="../fotografico/Pic_32.jpeg";
$ima32 ="../fotografico/Pic_33.jpeg";
$ima33 ="../fotografico/Pic_34.jpeg";
$ima34 ="../fotografico/Pic_35.jpeg";
$ima35 ="../fotografico/Pic_36.jpeg";
$ima36 ="../fotografico/Pic_37.jpeg";




   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima1, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima2, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima3, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima4, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima5, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima6, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima7, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima8, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima9, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima10, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima11, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima12, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima13, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima14, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima15, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima16, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima17, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima18, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima19, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima20, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima21, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima22, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima23, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima24, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima25, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima26, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima27, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima28, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima29, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima30, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima31, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima32, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima33, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima34, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima35, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima36, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);




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