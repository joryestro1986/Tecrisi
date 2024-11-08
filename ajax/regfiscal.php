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
if ($_SESSION['ventas']==1  )
{
require_once "../modelos/Regfiscal.php";

$regfiscal=new Regfiscal();

$idregfiscal=isset($_POST["idregfiscal"])? limpiarCadena($_POST["idregfiscal"]):"";
$desc=isset($_POST["desc"])? limpiarCadena($_POST["desc"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idregfiscal)){
			$rspta=$regfiscal->insertar($idregfiscal,$desc);
			echo $rspta ? "Persona registrada" : "Persona no se pudo registrar";
		}
		else {
			$rspta=$regfiscal->editar($idregfiscal,$desc);
			echo $rspta ? "Persona actualizada" : "Persona no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$regfiscal->eliminar($idregfiscal);
 		echo $rspta ? "Persona eliminada" : "Persona no se puede eliminar";
	break;

	case 'mostrar':
		$rspta=$regfiscal->mostrar($idregfiscal);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$regfiscal->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idregfiscal.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->idregfiscal.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->idregfiscal,
 				"2"=>$reg->desc
				
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