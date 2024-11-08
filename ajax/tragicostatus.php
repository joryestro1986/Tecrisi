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
if ($_SESSION['siniestros']==1)
{
require_once "../modelos/Tragicostatus.php";

$tragicostatus=new Tragicostatus();

$idmovint=isset($_POST["idmovint"])? limpiarCadena($_POST["idmovint"]):"";
//$idsiniestro=isset($_POST["idsiniestro"])? limpiarCadena($_POST["idsiniestro"]):"";

//$asegurado=isset($_POST["asegurado"])? limpiarCadena($_POST["asegurado"]):"";
//$aseguradora=isset($_POST["aseguradora"])? limpiarCadena($_POST["aseguradora"]):"";
////$analista=isset($_POST["analista"])? limpiarCadena($_POST["analista"]):"";


$idstatus=isset($_POST["idstatus"])? limpiarCadena($_POST["idstatus"]):"";

$fechasta1=isset($_POST["fechasta1"])? limpiarCadena($_POST["fechasta1"]):"";
$observastatus1=isset($_POST["observastatus1"])? limpiarCadena($_POST["observastatus1"]):"";

$fechasta2=isset($_POST["fechasta2"])? limpiarCadena($_POST["fechasta2"]):"";
$observastatus2=isset($_POST["observastatus2"])? limpiarCadena($_POST["observastatus2"]):"";

$fechasta3=isset($_POST["fechasta3"])? limpiarCadena($_POST["fechasta3"]):"";
$observastatus3=isset($_POST["observastatus3"])? limpiarCadena($_POST["observastatus3"]):"";

$fechasta4=isset($_POST["fechasta4"])? limpiarCadena($_POST["fechasta4"]):"";
$observastatus4=isset($_POST["observastatus4"])? limpiarCadena($_POST["observastatus4"]):"";

$fechasta5=isset($_POST["fechasta5"])? limpiarCadena($_POST["fechasta5"]):"";
$observastatus5=isset($_POST["observastatus5"])? limpiarCadena($_POST["observastatus5"]):"";

$fechasta6=isset($_POST["fechasta6"])? limpiarCadena($_POST["fechasta6"]):"";
$observastatus6=isset($_POST["observastatus6"])? limpiarCadena($_POST["observastatus6"]):"";


//$analista=$_SESSION["idusuario"];

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idmovint)){
			//$rspta=$tragico->insertar($siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$maestro_colocador,$observaciones);
			//echo $rspta ? "Siniestro registrad0" : "Siniestro no se pudo registrar";
		}
		else {
			$rspta=$tragicostatus->editar($fechasta1,$observastatus1,$fechasta2,$observastatus2,$fechasta3,$observastatus3,$fechasta4,$observastatus4,$fechasta5,$observastatus5,$fechasta6,$observastatus6,$idstatus,$idmovint); 
			//echo $rspta ? "Siniestro actualizado-". $idmovint ."-".$idstatus."_".$fechasta1: "Siniestro no se pudo actualizar";
				echo $rspta ? "Siniestro actualizado-" : "Siniestro no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$tragicostatus->desactivar($idmovint);
 		echo $rspta ? "Siniestro Desactivada" : "Siniestro no se puede desactivar";
	break;

	case 'activar':
		$rspta=$tragicostatus->activar($idmovint);
 		echo $rspta ? "Siniestro activada" : "Siniestro no se puede activar";
	break;

	case 'mostrar':
		$rspta=$tragicostatus->mostrar($idmovint);
 		//Codificar el resultado utilizando json
		echo json_encode($rspta);
	break;

	/*case 'listarDetalle':
		//Recibimos el idingreso
		$id=$_GET['id'];

		$rspta = $tragicostatus->listarDetalle($id);
		$total=0;
		echo '<thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>Artículo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Venta</th>
                                    <th>Descuento</th>
                                    <th>Subtotal</th>
                                </thead>';

		while ($reg = $rspta->fetch_object())
				{
					echo '<tr class="filas"><td></td><td>'.$reg->fecha.'</td><td>'.$reg->status.'</td><td>'.$reg->idstatus.'</td><td>'.$reg->observastatus.'</td></tr>';
					
				}
		echo '<tfoot>
                                    <th>TOTAL</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th> 
                                </tfoot>';
	break;*/
	
	case 'listar':
		$url='../reportes/exSeg.php?idmovint=';
	
		$rspta=$tragicostatus->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>(($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idmovint.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idmovint.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idmovint.')"><i class="fa fa-check"></i></button>').
					'<a target="_blank" href="'.$url.$reg->idmovint.'"> <button class="btn btn-info"><i class="fa fa-clipboard"></i></button></a>',
 				"1"=>$reg->siniestro,
 			
				"2"=>$reg->nombreseg,
 				"3"=>$reg->asegurado,
 				"4"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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