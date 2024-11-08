

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
	
	
		$asegurado ="INSTITUTO DE SEGURIDAD Y SERVICIOS SOCIALES DE LOS TRABAJADORES DEL ESTADO ";
		$siniestro="SHCP_P04_ISSSTE-01025 2023";
		$DirecTecrisi="Escuela Naval Militar 548 col. San Francisco Culhuacán CP. 04420 alcaldía Coyoacán, CDMX";
	$image ="../reportes/LOGO_TECRISI.png";
	//$pdf->Image($image, 80 ,22, 35 , 38,'JPG');
	////variables
	///detalle PDF
	
$ima1 ="../fotografico/Pice_-11.jpeg";
$ima2 ="../fotografico/Pice_11.jpeg";
$ima3 ="../fotografico/Pice_-12.jpeg";
$ima4 ="../fotografico/Pice_12.jpeg";
$ima5 ="../fotografico/Pice_-13.jpeg";
$ima6 ="../fotografico/Pice_13.jpeg";
$ima7 ="../fotografico/Pice_-14.jpeg";
$ima8 ="../fotografico/Pice_14.jpeg";
$ima9 ="../fotografico/Pice_-15.jpeg";
$ima10 ="../fotografico/Pice_15.jpeg";
$ima11 ="../fotografico/Pice_-16.jpeg";
$ima12 ="../fotografico/Pice_16.jpeg";
$ima13 ="../fotografico/Pice_-17.jpeg";
$ima14 ="../fotografico/Pice_17.jpeg";
$ima15 ="../fotografico/Pice_-18.jpeg";
$ima16 ="../fotografico/Pice_18.jpeg";
$ima17 ="../fotografico/Pice_-19.jpeg";
$ima18 ="../fotografico/Pice_19.jpeg";
$ima19 ="../fotografico/Pice_-20.jpeg";
$ima20 ="../fotografico/Pice_20.jpeg";
$ima21 ="../fotografico/Pice_-21.jpeg";
$ima22 ="../fotografico/Pice_21.jpeg";
$ima23 ="../fotografico/Pice_-22.jpeg";
$ima24 ="../fotografico/Pice_22.jpeg";
$ima25 ="../fotografico/Pice_-23.jpeg";
$ima26 ="../fotografico/Pice_23.jpeg";
$ima27 ="../fotografico/Pice_-24.jpeg";
$ima28 ="../fotografico/Pice_24.jpeg";
$ima29 ="../fotografico/Pice_-25.jpeg";
$ima30 ="../fotografico/Pice_25.jpeg";
$ima31 ="../fotografico/Pice_-26.jpeg";
$ima32 ="../fotografico/Pice_26.jpeg";
$ima33 ="../fotografico/Pice_-27.jpeg";
$ima34 ="../fotografico/Pice_27.jpeg";
$ima35 ="../fotografico/Pice_-28.jpeg";
$ima36 ="../fotografico/Pice_28.jpeg";
$ima37 ="../fotografico/Pice_-29.jpeg";
$ima38 ="../fotografico/Pice_-30.jpeg";
$ima39 ="../fotografico/Pice_-31.jpeg";
$ima40 ="../fotografico/Pice_-32.jpeg";
$ima41 ="../fotografico/Pice_-33.jpeg";
$ima42 ="../fotografico/Pice_-34.jpeg";
$ima43 ="../fotografico/Pice_-35.jpeg";
$ima44 ="../fotografico/Pice_-36.jpeg";
$ima45 ="../fotografico/Pice_-37.jpeg";
$ima46 ="../fotografico/Pice_-38.jpeg";
$ima47 ="../fotografico/Pice_-39.jpeg";
$ima48 ="../fotografico/Pice_-40.jpeg";
$ima49 ="../fotografico/Pice_-41.jpeg";
$ima50 ="../fotografico/Pice_-42.jpeg";
$ima51 ="../fotografico/Pice_-43.jpeg";


 
 
 
$pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima1, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima2, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima3, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima4, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima5, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima6, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima7, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima8, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima9, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima10, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima11, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima12, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima13, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima14, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima15, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima16, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima17, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima18, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima19, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima20, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima21, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima22, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima23, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima24, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima25, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima26, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima27, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima28, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima29, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima30, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima31, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima32, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima33, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima34, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima35, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima36, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima37, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima38, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima39, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima40, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima41, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima42, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima43, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima44, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima45, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima46, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima47, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima48, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(117, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima49, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima50, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima51, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');

  $pdf->Ln(73);

 $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);

 
 
 

//$pdf->Output($reg->siniestro. '.pdf','I');
//$pdf->Output('Reportefoto.pdf','I');
//$pdf->Output('//vimolamexserver/Server/2024/'.$reg->siniestro.'.pdf',"F"); 
$pdf->Output('ReporteFotos - '.$siniestro. '.pdf','I');
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


