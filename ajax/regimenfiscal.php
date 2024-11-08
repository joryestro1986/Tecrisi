<?php 
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión
}
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../vistas/login.html");//Validamos el acceso solo a los usuarios logueados al sistema.
}
else
{
//Validamos el acceso solo al usuario logueado y autorizado.
if ($_SESSION['ventas']==1)
{
	
	
require_once "../modelos/Regimenfiscal.php";

$regimenfiscal=new Regimenfiscal();

$idregf=isset($_POST["idregf"])? limpiarCadena($_POST["idregf"]):"";
$idregfiscal=isset($_POST["idregfiscal"])? limpiarCadena($_POST["idregfiscal"]):"";
$descregf=isset($_POST["descregf"])? limpiarCadena($_POST["descregf"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idregf)){
			$rspta=$regimenfiscal->insertar($idregfiscal,$descregf);
			echo $rspta ? "Regismen fiscal registrado" : "Regismen fiscal no se pudo registrar";
		}
		else {
			$rspta=$regimenfiscal->editar($idregf,$idregfiscal,$descregf);
			echo $rspta ? "Regismen fiscal actualizado" : "Regismen fiscal no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$regimenfiscal->desactivar($idregf);
 		echo $rspta ? "Regismen fiscal Desactivada" : "Regismen fiscal no se puede desactivar";
	break;

	case 'activar':
		$rspta=$regimenfiscal->activar($idregf);
 		echo $rspta ? "Regismen fiscal activada" : "Regismen fiscal no se puede activar";
	break;

	case 'mostrar':
		$rspta=$regimenfiscal->mostrar($idregf);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$regimenfiscal->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idregf.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idregf.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idregf.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idregf.')"><i class="fa fa-check"></i></button>',
				"1"=>$reg->idregfiscal,
 				"2"=>$reg->descregf,
 				"3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;
	
	
	
}
//Fin de las validaciones de acceso
}
else
{
  require 'noacceso.php';
}
}
ob_end_flush();
?>