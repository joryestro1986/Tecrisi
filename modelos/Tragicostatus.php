<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Tragicostatus
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros 
	//  $siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible,$estatus_siniestro,$maestro_colocador,$observaciones

	/*
	public function insertar($idstatus,$idsiniestro,$fechasta1,$observastatus1,$fechasta2,$observastatus2,$fechasta3,$observastatus3,$fechasta4,$observastatus4,$fechasta5,$observastatus5,$fechasta6,$observastatus6)
	{
		$sql="INSERT INTO statustragicos (siniestro,poliza,fechareporte,fechasiniestro,vigenciapoliza,terminopoliza,asegurado,reporta,atiendeasegurado,calle,colonia,alcandiamupio,estado,telefonot,correo,cristales,aseguradora,analista,atiende,fecharecepcion,fechamedicion,fechacotizacion,fechaautorizacion,fecharuta,fechacolocacion,fechafactura,complementopago,deducible,estatus_siniestro,maestro_colocador,observaciones,condicion)
		VALUES ('$siniestro','$poliza','$fechareporte','$fechasiniestro','$vigenciapoliza','$terminopoliza','$asegurado','$reporta','$atiendeasegurado','$calle','$colonia','$alcandiamupio','$estado','$telefonot','$correo','$cristales','$aseguradora','$analista','$atiende','$fecharecepcion','$fechamedicion','$fechacotizacion','$fechaautorizacion','$fecharuta','$fechacolocacion','$fechafactura','$complementopago','$deducible','$estatus_siniestro','$maestro_colocador','$observaciones','1')";
		return ejecutarConsulta($sql);
	}
	*/

	//Implementamos un método para editar registros
	// case '$observastatus1' when '' then null else '$observastatus1' end,
	public function editar($fechasta1,$observastatus1,$fechasta2,$observastatus2,$fechasta3,$observastatus3,$fechasta4,$observastatus4,$fechasta5,$observastatus5,$fechasta6,$observastatus6,$idstatus,$idmovint)
	{
		$sql="UPDATE statustragicos SET fechasta1='$fechasta1',observastatus1=case '$observastatus1' when '' then null else '$observastatus1' end,
		fechasta2=case '$fechasta2' when '' then null else '$fechasta2' end, observastatus2=case '$observastatus2' when '' then null else '$observastatus2' end,
		fechasta3=case '$fechasta3' when '' then null else '$fechasta3' end, observastatus3=case '$observastatus3' when '' then null else '$observastatus3' end,
		fechasta4=case '$fechasta4' when '' then null else '$fechasta4' end, observastatus4=case '$observastatus4' when '' then null else '$observastatus4' end,
		fechasta5=case '$fechasta5' when '' then null else '$fechasta5' end, observastatus5=case '$observastatus5' when '' then null else '$observastatus5' end,
		fechasta6=case '$fechasta6' when '' then null else '$fechasta6' end, observastatus6=case '$observastatus6' when '' then null else '$observastatus6' end, fechacambio='NOW()'
 WHERE idstatus='$idmovint'  ";
		return ejecutarConsulta($sql); 
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idmovint)
	{
		$sql="UPDATE tragico SET condicion='0' WHERE idmovint='$idmovint'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idmovint)
	{
		$sql="UPDATE tragico SET condicion='1' WHERE idmovint='$idmovint'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idmovint)
	{
		$sql="SELECT * FROM `statustragicos` st INNER JOIN tragico t on st.idsiniestro=t.idmovint inner join aseguradora ase on ase.idseguradora=t.idseguradora WHERE st.idsiniestro='$idmovint'";
		return ejecutarConsultaSimpleFila($sql);
	}
	/*
	//Implementar un método para mostrar los datos de un registro a modificar
	public function listarDetalle($idmovint)
	{
		$sql="SELECT * FROM `statustragico` WHERE siniestros='$idmovint'";
		return ejecutarConsultaSimpleFila($sql);
	}
	*/
	
	//Implementar un método para listar los registros
	public function listar()
	{
	$sql=" SELECT * FROM statustragicos st inner join tragico t on st.idsiniestro=t.idmovint inner join aseguradora ase on ase.idseguradora=t.idseguradora group by t.idmovint, st.idsiniestro,t.idseguradora,ase.nombreseg,t.condicion ORDER BY `st`.`idsiniestro` desc ";
		//$sql=" SELECT * FROM statustragicos st inner join tragico t on st.idsiniestro=t.idmovint inner join aseguradora ase on ase.idseguradora=t.idseguradora group by t.idmovint, st.idsiniestro,t.asegurado,t.aseguradora,t.condicion ORDER BY `st`.`idsiniestro` desc ";
	
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tragico where condicion=1";
		return ejecutarConsulta($sql);		
	}
		public function ventareportsin($idmovint){
		$sql="SELECT * FROM statustragicos st  INNER JOIN tragico t on st.idsiniestro=t.idmovint WHERE t.idmovint='$idmovint'";
		return ejecutarConsulta($sql);
	}
	
 
}

?>