

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
		$siniestro="SHCP_P04_ISSSTE-01144 2023";
		$DirecTecrisi="Escuela Naval Militar 548 col. San Francisco Culhuacán CP. 04420 alcaldía Coyoacán";
	
	
	$image ="../reportes/LOGO_TECRISI.png";
	//$pdf->Image($image, 80 ,22, 35 , 38,'JPG');
	$pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');
	$pdf->Ln(8);
	$pdf->setFont('Arial', 'B', 13);
//	$pdf->Cell(90, 3,utf8_decode('SINIESTRO: '. $reg->siniestro), 0, 1, 'C', 0);
	$pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);
	//$pdf->Cell(25, 1,utf8_decode('SINIESTRO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	////$pdf->Cell(100, -3,utf8_decode(  $reg->siniestro ), 0,1, 'C', 0);
	//$pdf->Cell(100, -3,utf8_decode(  'SHCP_P04_ISSSTE-01185/2023' ), 0,1, 'C', 0);
	$pdf->Ln(8);
	//	$pdf->setFont('Arial', 'B', 9);
	//$pdf->Cell(213, 8,utf8_decode('ASEGURADO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', 'b', 12);
//	$pdf->Cell(225, 1,utf8_decode('FECHA SINIESTRO:   '. $reg->fechasiniestro), 0, 1, 'C', 0);
	$pdf->Cell(200, 1,utf8_decode(''. $asegurado ), 0, 1, 'C', 0);
	$pdf->Ln(5);
$pdf->setFont('Arial', '', 12);


	
$ima1 ="../fotografico/Pic_2_2.jpeg";
$ima2 ="../fotografico/Pic_2.jpeg";
$ima3 ="../fotografico/Pic_3_2.jpeg";
$ima4 ="../fotografico/Pic_3.jpeg";
$ima5 ="../fotografico/Pic_4.jpeg";

$ima7 ="../fotografico/Pic_5_2.jpeg";
$ima8 ="../fotografico/Pic_5.jpeg";
$ima9 ="../fotografico/Pic_6_2.jpeg";
$ima10 ="../fotografico/Pic_6.jpeg";
$ima11 ="../fotografico/Pic_7.jpeg";

$ima13 ="../fotografico/Pic_8_2.jpeg";
$ima14 ="../fotografico/Pic_8.jpeg";
$ima15 ="../fotografico/Pic_9_2.jpeg";
$ima16 ="../fotografico/Pic_9.jpeg";
$ima17 ="../fotografico/Pic_10_2.jpeg";
$ima18 ="../fotografico/Pic_10.jpeg";
$ima19 ="../fotografico/Pic_11_2.jpeg";
$ima20 ="../fotografico/Pic_11.jpeg";
$ima21 ="../fotografico/Pic_12_2.jpeg";
$ima22 ="../fotografico/Pic_12.jpeg";
$ima23 ="../fotografico/Pic_13_2.jpeg";
$ima24 ="../fotografico/Pic_13.jpeg";
$ima25 ="../fotografico/Pic_14_2.jpeg";
$ima26 ="../fotografico/Pic_14.jpeg";
$ima27 ="../fotografico/Pic_15_2.jpeg";
$ima28 ="../fotografico/Pic_15.jpeg";
$ima29 ="../fotografico/Pic_16_2.jpeg";
$ima30 ="../fotografico/Pic_16.jpeg";
$ima31 ="../fotografico/Pic_17_2.jpeg";
$ima32 ="../fotografico/Pic_17.jpeg";
$ima33 ="../fotografico/Pic_18_2.jpeg";
$ima34 ="../fotografico/Pic_18.jpeg";
$ima35 ="../fotografico/Pic_19_2.jpeg";
$ima36 ="../fotografico/Pic_19.jpeg";
$ima37 ="../fotografico/Pic_20_2.jpeg";
$ima38 ="../fotografico/Pic_20.jpeg";
$ima39 ="../fotografico/Pic_21_2.jpeg";
$ima40 ="../fotografico/Pic_21.jpeg";
$ima41 ="../fotografico/Pic_22_2.jpeg";
$ima42 ="../fotografico/Pic_22.jpeg";
$ima43 ="../fotografico/Pic_23_2.jpeg";
$ima44 ="../fotografico/Pic_23.jpeg";
$ima45 ="../fotografico/Pic_24_2.jpeg";
$ima46 ="../fotografico/Pic_24.jpeg";
$ima47 ="../fotografico/Pic_25_2.jpeg";
$ima48 ="../fotografico/Pic_25.jpeg";
$ima49 ="../fotografico/Pic_26_2.jpeg";
$ima50 ="../fotografico/Pic_26.jpeg";
$ima51 ="../fotografico/Pic_27_2.jpeg";
$ima52 ="../fotografico/Pic_27.jpeg";
$ima53 ="../fotografico/Pic_28_2.jpeg";
$ima54 ="../fotografico/Pic_28.jpeg";
$ima55 ="../fotografico/Pic_29_2.jpeg";
$ima56 ="../fotografico/Pic_29.jpeg";
$ima57 ="../fotografico/Pic_30_2.jpeg";
$ima58 ="../fotografico/Pic_30.jpeg";
$ima59 ="../fotografico/Pic_31_2.jpeg";
$ima60 ="../fotografico/Pic_31.jpeg";
$ima61 ="../fotografico/Pic_32_2.jpeg";
$ima62 ="../fotografico/Pic_32.jpeg";
$ima63 ="../fotografico/Pic_33_2.jpeg";
$ima64 ="../fotografico/Pic_33.jpeg";
$ima65 ="../fotografico/Pic_34_2.jpeg";
$ima66 ="../fotografico/Pic_34.jpeg";
$ima67 ="../fotografico/Pic_35_2.jpeg";
$ima68 ="../fotografico/Pic_35.jpeg";
$ima69 ="../fotografico/Pic_36_2.jpeg";
$ima70 ="../fotografico/Pic_36.jpeg";
$ima71 ="../fotografico/Pic_37.jpeg";
$ima72 ="../fotografico/Pic_38.jpeg";
$ima73 ="../fotografico/Pic_39.jpeg";
$ima74 ="../fotografico/Pic_40.jpeg";
$ima75 ="../fotografico/Pic_41.jpeg";
$ima76 ="../fotografico/Pic_42.jpeg";
$ima77 ="../fotografico/Pic_43.jpeg";
$ima78 ="../fotografico/Pic_44.jpeg";
$ima79 ="../fotografico/Pic_45.jpeg";
$ima80 ="../fotografico/Pic_46.jpeg";
$ima81 ="../fotografico/Pic_47.jpeg";
$ima82 ="../fotografico/Pic_48.jpeg";
$ima83 ="../fotografico/Pic_49.jpeg";
$ima84 ="../fotografico/Pic_50.jpeg";
$ima85 ="../fotografico/Pic_51.jpeg";
$ima86 ="../fotografico/Pic_52.jpeg";
$ima87 ="../fotografico/Pic_53.jpeg";
$ima88 ="../fotografico/Pic_54.jpeg";
$ima89 ="../fotografico/Pic_55.jpeg";
$ima90 ="../fotografico/Pic_56.jpeg";
$ima91 ="../fotografico/Pic_57.jpeg";
$ima92 ="../fotografico/Pic_58.jpeg";
$ima93 ="../fotografico/Pic_59.jpeg";
$ima94 ="../fotografico/Pic_60.jpeg";
$ima95 ="../fotografico/Pic_61.jpeg";
$ima96 ="../fotografico/Pic_62.jpeg";
$ima97 ="../fotografico/Pic_63.jpeg";
$ima98 ="../fotografico/Pic_64.jpeg";
$ima99 ="../fotografico/Pic_65.jpeg";
$ima100 ="../fotografico/Pic_66.jpeg";
$ima101 ="../fotografico/Pic_67.jpeg";
$ima102 ="../fotografico/Pic_68.jpeg";
$ima103 ="../fotografico/Pic_69.jpeg";
$ima104 ="../fotografico/Pic_70.jpeg";
$ima105 ="../fotografico/Pic_71.jpeg";
$ima106 ="../fotografico/Pic_72.jpeg";
$ima107 ="../fotografico/Pic_73.jpeg";
$ima108 ="../fotografico/Pic_74.jpeg";
$ima109 ="../fotografico/Pic_75.jpeg";
$ima110 ="../fotografico/Pic_76.jpeg";
$ima111 ="../fotografico/Pic_77.jpeg";
$ima112 ="../fotografico/Pic_78.jpeg";
$ima113 ="../fotografico/Pic_79.jpeg";
$ima114 ="../fotografico/Pic_80.jpeg";
$ima115 ="../fotografico/Pic_81.jpeg";
$ima116 ="../fotografico/Pic_82.jpeg";
$ima117 ="../fotografico/Pic_83.jpeg";
$ima118 ="../fotografico/Pic_84.jpeg";
$ima119 ="../fotografico/Pic_85.jpeg";
$ima120 ="../fotografico/Pic_86.jpeg";






		
	$pdf->Cell(1,0, $pdf->Image($ima1, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	$pdf->Cell(1,0, $pdf->Image($ima2, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(73);
	
	$pdf->Cell(1,0, $pdf->Image($ima3, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	$pdf->Cell(1,0, $pdf->Image($ima4, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(73);
	$pdf->Cell(1,0, $pdf->Image($ima5, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	//$pdf->Cell(1,0, $pdf->Image($ima6, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(71);
	$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);
	$pdf->setFont('Arial', 'b', 12);
	$pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);
	$pdf->setFont('Arial', '', 12);
	
	$pdf->AddPage();
	
	//$pdf->Ln(30);
	////////////////////
		$pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');
	$pdf->Ln(8);
	$pdf->setFont('Arial', 'B', 13);
//	$pdf->Cell(90, 3,utf8_decode('SINIESTRO: '. $reg->siniestro), 0, 1, 'C', 0);
	$pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);
	//$pdf->Cell(25, 1,utf8_decode('SINIESTRO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', '', 9);
	////$pdf->Cell(100, -3,utf8_decode(  $reg->siniestro ), 0,1, 'C', 0);
	//$pdf->Cell(100, -3,utf8_decode(  'SHCP_P04_ISSSTE-01185/2023' ), 0,1, 'C', 0);
	$pdf->Ln(8);
	//	$pdf->setFont('Arial', 'B', 9);
	//$pdf->Cell(213, 8,utf8_decode('ASEGURADO: '), 0, 1, 'C', 0);
		$pdf->setFont('Arial', 'b', 12);
//	$pdf->Cell(225, 1,utf8_decode('FECHA SINIESTRO:   '. $reg->fechasiniestro), 0, 1, 'C', 0);
	$pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);
	$pdf->Ln(5);
$pdf->setFont('Arial', '', 12);
	///////////////////////
	$pdf->Cell(1,0, $pdf->Image($ima7, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	$pdf->Cell(1,0, $pdf->Image($ima8, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(73);
 	$pdf->Cell(1,0, $pdf->Image($ima9, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	$pdf->Cell(1,0, $pdf->Image($ima10, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(73);
	
	$pdf->Cell(1,0, $pdf->Image($ima11, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
	//$pdf->Cell(1,0, $pdf->Image($ima12, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');
	$pdf->Ln(71);
	$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);
	$pdf->setFont('Arial', 'b', 12);
	$pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);
	$pdf->setFont('Arial', '', 12);

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
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima37, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima38, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima39, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima40, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima41, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima42, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima43, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima44, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima45, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima46, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima47, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima48, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima49, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima50, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima51, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima52, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima53, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima54, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima55, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima56, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima57, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima58, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima59, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima60, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima61, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima62, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima63, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima64, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima65, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima66, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima67, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima68, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima69, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima70, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima71, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima72, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima73, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima74, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima75, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima76, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima77, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima78, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima79, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima80, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima81, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima82, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima83, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima84, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima85, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima86, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima87, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima88, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima89, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima90, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima91, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima92, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima93, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima94, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima95, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima96, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima97, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima98, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima99, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima100, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima101, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima102, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima103, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima104, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima105, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima106, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima107, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima108, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima109, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima110, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima111, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima112, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima113, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima114, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);
$pdf->AddPage();   $pdf->Cell(1,0, $pdf->Image($image, $pdf->GetX()+140, $pdf->GetY(),45),'PNG');   $pdf->Ln(8);   $pdf->setFont('Arial', 'B', 13);   $pdf->Cell(100, 3,utf8_decode('SINIESTRO: '. $siniestro), 0, 1, 'C', 0);   $pdf->setFont('Arial', '', 9);   $pdf->Ln(8);   $pdf->setFont('Arial', 'b', 12);   $pdf->Cell(200, 1,utf8_decode(''. $asegurado), 0, 1, 'C', 0);   $pdf->Ln(5);   $pdf->setFont('Arial', '', 12);$pdf->Cell(1,0, $pdf->Image($ima115, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima116, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima117, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima118, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(73);
$pdf->Cell(1,0, $pdf->Image($ima119, $pdf->GetX()+1, $pdf->GetY(),95,69),'JPEG');
$pdf->Cell(1,0, $pdf->Image($ima120, $pdf->GetX()+100, $pdf->GetY(),95,69),'JPEG');  $pdf->Ln(71);$pdf->Cell(170, 1,utf8_decode(''. $DirecTecrisi), 0, 0, 'C', 0);  $pdf->setFont('Arial', 'b', 12);  $pdf->Cell(0, -1,utf8_decode('Page '.$pdf->PageNo(), ), 0, 1, 'C', 0);  $pdf->setFont('Arial', '', 12);


//$pdf->Output($reg->siniestro. '.pdf','I');
//$pdf->Output('Reportefoto.pdf','I');
//$pdf->Output('//vimolamexserver/Server/2024/'.$reg->siniestro.'.pdf',"F"); 
$pdf->Output($siniestro,'I');
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