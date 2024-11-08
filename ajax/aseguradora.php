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
if ($_SESSION['almacen']==1)
{
require_once "../modelos/Aseguradora.php";

$asegura=new Aseguradora();

$idseguradora=isset($_POST["idseguradora"])? limpiarCadena($_POST["idseguradora"]):"";
$nombreseg=isset($_POST["nombreseg"])? limpiarCadena($_POST["nombreseg"]):"";
//$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idseguradora)){
			$rspta=$asegura->insertar($nombreseg);
			echo $rspta ? "Aseguradora registrada" : "Aseguradora no se pudo registrar";
		}
		else {
			$rspta=$asegura->editar($idseguradora,$nombreseg);
			echo $rspta ? "Aseguradora actualizada" : "Aseguradora no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$asegura->desactivar($idseguradora);
 		echo $rspta ? "Aseguradora Desactivada" : "Aseguradora no se puede desactivar";
	break;

	case 'activar':
		$rspta=$asegura->activar($idseguradora);
 		echo $rspta ? "Aseguradora activada" : "Aseguradora no se puede activar";
	break;

	case 'mostrar':
		$rspta=$asegura->mostrar($idseguradora);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$asegura->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idseguradora.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idseguradora.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idseguradora.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idseguradora.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombreseg,
 			
 				"2"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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