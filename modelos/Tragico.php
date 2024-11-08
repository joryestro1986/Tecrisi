<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Tragico
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros 
	
	public function insertar($siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$idseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible,$estatus_siniestro,$maestro_colocador,$observaciones)
	{
		
		$sql="INSERT INTO tragico (siniestro,poliza,fechareporte,fechasiniestro,
		vigenciapoliza,terminopoliza,asegurado,reporta,atiendeasegurado,calle,colonia,alcandiamupio,estado,telefonot,correo,
		cristales,idseguradora,analista,atiende,fecharecepcion,fechamedicion,fechacotizacion,fechaautorizacion,fecharuta,fechacolocacion,fechafactura,complementopago,deducible,estatus_siniestro,maestro_colocador,observaciones)
		VALUES ('$siniestro','$poliza','$fechareporte','$fechasiniestro',case '$vigenciapoliza' when '' then null else '$vigenciapoliza' end ,	case '$terminopoliza' when '' then null else '$terminopoliza' end ,	'$asegurado','$reporta','$atiendeasegurado','$calle','$colonia','$alcandiamupio','$estado','$telefonot','$correo',
		case '$cristales' when '' then null else '$cristales' end , '$idseguradora','$analista',  case '$atiende' when '' then null else '$atiende' end, case '$fecharecepcion' when '' then null else '$fecharecepcion' end, case '$fechamedicion' when '' then null else '$fechamedicion' end,
		case '$fechacotizacion' when '' then null else '$fechacotizacion' end, case '$fechaautorizacion' when '' then null else '$fechaautorizacion' end,case '$fecharuta' when '' then null else '$fecharuta' end, case '$fechacolocacion' when '' then null else '$fechacolocacion' end, case '$fechafactura' when '' then null else '$fechafactura' end,
		case '$complementopago' when '' then null else '$complementopago' end, case '$deducible' when '' then null else '$deducible' end, case '$estatus_siniestro' when '' then null else '$estatus_siniestro' end, case '$maestro_colocador' when '' then null else '$maestro_colocador' end,case '$observaciones' when '' then NULL else '$observaciones' end )";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros    case '$cristales' when '' then null else '$cristales' end
	public function editar($idmovint,$siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$idseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$maestro_colocador,$observaciones)
	{
		$sql="UPDATE tragico SET siniestro='$siniestro',poliza='$poliza',fechareporte='$fechareporte',fechasiniestro='$fechasiniestro',
		vigenciapoliza=case '$vigenciapoliza' when '' then null else '$vigenciapoliza' end ,
		terminopoliza= case '$terminopoliza' when '' then null else '$terminopoliza' end ,
		asegurado='$asegurado',reporta='$reporta',atiendeasegurado='$atiendeasegurado',calle='$calle',colonia='$colonia',alcandiamupio='$alcandiamupio',estado='$estado',telefonot='$telefonot',correo='$correo',
cristales=case '$cristales' when '' then null else '$cristales' end ,
 idseguradora='$idseguradora',analista='$analista',atiende=case '$atiende' when '' then null else '$atiende' end,
fecharecepcion=case '$fecharecepcion' when '' then null else '$fecharecepcion' end,
fechamedicion=case '$fechamedicion' when '' then null else '$fechamedicion' end,
fechacotizacion=case '$fechacotizacion' when '' then null else '$fechacotizacion' end,
fechaautorizacion=case '$fechaautorizacion' when '' then null else '$fechaautorizacion' end,
fecharuta=case '$fecharuta' when '' then null else '$fecharuta' end,
fechacolocacion=case '$fechacolocacion' when '' then null else '$fechacolocacion' end,
fechafactura=case '$fechafactura' when '' then null else '$fechafactura' end,
complementopago=case '$complementopago' when '' then null else '$complementopago' end,
deducible=case '$deducible' when '' then null else '$deducible' end,
estatus_siniestro=case '$estatus_siniestro' when '' then null else '$estatus_siniestro' end,
maestro_colocador=case '$maestro_colocador' when '' then null else '$maestro_colocador' end,
observaciones=case '$observaciones' when '' then NULL else '$observaciones' end
 WHERE idmovint='$idmovint'";
		return ejecutarConsulta($sql); 
	}

	//Implementamos un método para desactivar categorías MAYO- JUNIO VIMO, TECRISI,RITO
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
		$sql="SELECT * FROM tragico WHERE idmovint='$idmovint'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql= "SELECT * FROM tragico t INNER JOIN Aseguradora a on a.idseguradora=t.idseguradora inner join usuario u on t.analista=u.idusuario ORDER BY t.idmovint DESC";
		//$sql="SELECT * FROM tragico t INNER JOIN usuario u on t.analista=u.idusuario ORDER BY idmovint DESC";
		//$sql="SELECT * FROM tragico t INNER JOIN Aseguradora a on a.idseguradora=t.idseguradora inner join usuario u on t.analista=u.idusuario ORDER BY t.idmovint DESC":
		
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tragico where condicion=1";
		return ejecutarConsulta($sql);		
	}
		public function ventareportsin($idmovint)
	{
		$sql="SELECT * FROM tragico t INNER JOIN  usuario u on t.analista=u.idusuario inner join aseguradora aseg on t.idseguradora=aseg.idseguradora   WHERE t.idmovint='$idmovint'";
		return ejecutarConsulta($sql);
	}
	
	   public function ventareportsindet($idmovint)
	{
		$sql="SELECT * FROM statustragicos WHERE idsiniestro='$idmovint'";
		return ejecutarConsulta($sql);
	}
	   public function  listarSiniestro()
	{
		$sql=" SELECT tragico.idmovint, rtrim(Ltrim(aseguradora.nombreseg)) nombreseg,rtrim(ltrim(tragico.siniestro)) siniestro FROM tragico  inner join aseguradora on tragico.idseguradora=aseguradora.idseguradora where tragico.condicion=1 order by tragico.idmovint desc ";
		return ejecutarConsulta($sql);		
	}
}

?>