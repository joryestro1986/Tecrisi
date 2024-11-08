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
require_once "../modelos/Siniestro.php";

$siniestro=new Siniestro();

//$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
//$idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";

$idmovint=isset($_POST["idmovint"])? limpiarCadena($_POST["idmovint"]):"";

$siniestro=isset($_POST["siniestro"])? limpiarCadena($_POST["siniestro"]):"";
$poliza=isset($_POST["poliza"])? limpiarCadena($_POST["poliza"]):"";
$fechareporte=isset($_POST["fechareporte"])? limpiarCadena($_POST["fechareporte"]):"";
$fechasiniestro=isset($_POST["fechasiniestro"])? limpiarCadena($_POST["fechasiniestro"]):"";
$vigenciapoliza=isset($_POST["vigenciapoliza"])? limpiarCadena($_POST["vigenciapoliza"]):"";
$terminopoliza=isset($_POST["terminopoliza"])? limpiarCadena($_POST["terminopoliza"]):"";
$asegurado=isset($_POST["asegurado"])? limpiarCadena($_POST["asegurado"]):"";
$reporta=isset($_POST["reporta"])? limpiarCadena($_POST["reporta"]):"";
$atiendeasegurado=isset($_POST["atiendeasegurado"])? limpiarCadena($_POST["atiendeasegurado"]):"";
$calle=isset($_POST["calle"])? limpiarCadena($_POST["calle"]):"";
$colonia=isset($_POST["colonia"])? limpiarCadena($_POST["colonia"]):"";
$alcandiamupio=isset($_POST["alcandiamupio"])? limpiarCadena($_POST["alcandiamupio"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";

$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$correo=isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
$cristales=isset($_POST["cristales"])? limpiarCadena($_POST["cristales"]):"";
$aseguradora=isset($_POST["aseguradora"])? limpiarCadena($_POST["aseguradora"]):"";
//$analista=isset($_POST["analista"])? limpiarCadena($_POST["analista"]):"";
$analista=$_SESSION["idusuario"];

$atiende=isset($_POST["atiende"])? limpiarCadena($_POST["atiende"]):"";

$fecharecepcion=isset($_POST["fecharecepcion"])? limpiarCadena($_POST["fecharecepcion"]):"";
$fechamedicion=isset($_POST["fechamedicion"])? limpiarCadena($_POST["fechamedicion"]):"";
$fechacotizacion=isset($_POST["fechacotizacion"])? limpiarCadena($_POST["fechacotizacion"]):"";
$fechaautorizacion=isset($_POST["fechaautorizacion"])? limpiarCadena($_POST["fechaautorizacion"]):"";
$fecharuta=isset($_POST["fecharuta"])? limpiarCadena($_POST["fecharuta"]):"";
$fechacolocacion=isset($_POST["fechacolocacion"])? limpiarCadena($_POST["fechacolocacion"]):"";
$fechafactura=isset($_POST["fechafactura"])? limpiarCadena($_POST["fechafactura"]):"";

$complementopago=isset($_POST["complementopago"])? limpiarCadena($_POST["complementopago"]):"";
$deducible=isset($_POST["deducible"])? limpiarCadena($_POST["deducible"]):"";
$estatus_siniestro=isset($_POST["estatus_siniestro"])? limpiarCadena($_POST["estatus_siniestro"]):"";
$observaciones=isset($_POST["observaciones"])? limpiarCadena($_POST["observaciones"]):"";



switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($idmovint)){
			$rspta=$siniestro->insertar($siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefono,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$observaciones);
			echo $rspta ? "Siniestro registrado" : "Siniestro no se pudo registrar";
		}
		else {
			$rspta=$siniestro->editar($idmovint,$siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefono,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$observaciones);
			echo $rspta ? "Siniestro actualizado" : "Siniestro no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$siniestro->desactivar($idmovint);
 		echo $rspta ? "Siniestro Desactivado" : "Siniestro no se puede desactivar";
	break;

	case 'activar':
		$rspta=$siniestro->activar($idmovint);
 		echo $rspta ? "Siniestro activado" : "Siniestro no se puede activar";
	break;

	case 'mostrar':
		$rspta=$siniestro->mostrar($idmovint);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$siniestro->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
			"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
		 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idmovint.')"><i class="fa fa-close"></i></button>':
		 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
		 					' <button class="btn btn-primary" onclick="activar('.$reg->idmovint.')"><i class="fa fa-check"></i></button>',
		 		
 				"0"=>$reg->siniestro,
 				"1"=>$reg->fechareporte,
 				"2"=>$reg->estado,
 				"3"=>$reg->telefono,
				"4"=>$reg->aseguradora,
				"5"=>$reg->analista,
				"6"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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

	case "selectCategoria":
		require_once "../modelos/Categoria.php";
		$categoria = new Categoria();

		$rspta = $categoria->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->idcategoria . '>' . $reg->nombre . '</option>';
				}
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