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
if ($_SESSION['ConsultaClien']==1)
{
require_once "../modelos/ConAseguradora.php";

$seguro=new Aseguradora();

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

$telefonot=isset($_POST["telefonot"])? limpiarCadena($_POST["telefonot"]):"";
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

$maestro_colocador=isset($_POST["maestro_colocador"])? limpiarCadena($_POST["maestro_colocador"]):"";
$observaciones=isset($_POST["observaciones"])? limpiarCadena($_POST["observaciones"]):"";




switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idmovint)){
			$rspta=$seguro->insertar($siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$maestro_colocador,$observaciones);
			echo $rspta ? "Siniestro registrad0" : "Siniestro no se pudo registrar";
		}
		else {
			$rspta=$seguro->editar($idmovint,$siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible,$estatus_siniestro,$maestro_colocador,$observaciones); 
			echo $rspta ? "Siniestro actualizad0" : "Siniestro no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$seguro->desactivar($idmovint);
 		echo $rspta ? "Siniestro Desactivada" : "Siniestro no se puede desactivar";
	break;

	case 'activar':
		$rspta=$seguro->activar($idmovint);
 		echo $rspta ? "Siniestro activada" : "Siniestro no se puede activar";
	break;

	case 'mostrar':
		$rspta=$seguro->mostrar($idmovint);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
			
			
			/*if ($_SESSION["idusuario"]==1)
			{
					$rspta=$seguro->listar();
			}else if ($_SESSION["idusuario"]==2)
			{
				
			}else if ($_SESSION["idusuario"]==8)
			{
				$rspta=$seguro->listarCleintes($_SESSION["idusuario"]);
			}*/
			
			if ($_SESSION["tipo_documento"]=="DNI")
			{
					$rspta=$seguro->listarClientesall();
			}else if ($_SESSION["tipo_documento"]=="CEDULA")
			{
				$rspta=$seguro->listarClienteswhere($_SESSION["idusuario"]);
			}
			
   
		$url='../reportes/exSeg.php?idmovint=';
	
		//$rspta=$seguro->listar();
 		////Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>(($reg->condicion)?
				    //'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idmovint.')"><i class="fa fa-close"></i></button>':
 					//'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idmovint.')"><i class="fa fa-check"></i></button>'
					).'<a target="_blank" href="'.$url.$reg->idmovint.'"> <button class="btn btn-info"><i class="fa fa-clipboard"></i></button></a>',
 				"1"=>$reg->siniestro,
 				"2"=>$reg->fechareporte,
				"3"=>$reg->estado,
 				"4"=>$reg->asegurado,
				"5"=>$reg->nombreseg,
 			
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