<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Aseguradora
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros 
	//  $siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible,$estatus_siniestro,$maestro_colocador,$observaciones
	public function insertar($siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible,$estatus_siniestro,$maestro_colocador,$observaciones)
	{
		$sql="INSERT INTO tragico (siniestro,poliza,fechareporte,fechasiniestro,vigenciapoliza,terminopoliza,asegurado,reporta,atiendeasegurado,calle,colonia,alcandiamupio,estado,telefonot,correo,cristales,aseguradora,analista,atiende,fecharecepcion,fechamedicion,fechacotizacion,fechaautorizacion,fecharuta,fechacolocacion,fechafactura,complementopago,deducible,estatus_siniestro,maestro_colocador,observaciones,condicion)
		VALUES ('$siniestro','$poliza','$fechareporte','$fechasiniestro','$vigenciapoliza','$terminopoliza','$asegurado','$reporta','$atiendeasegurado','$calle','$colonia','$alcandiamupio','$estado','$telefonot','$correo','$cristales','$aseguradora','$analista','$atiende','$fecharecepcion','$fechamedicion','$fechacotizacion','$fechaautorizacion','$fecharuta','$fechacolocacion','$fechafactura','$complementopago','$deducible','$estatus_siniestro','$maestro_colocador','$observaciones','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idmovint,$siniestro,$poliza,$fechareporte,$fechasiniestro,$vigenciapoliza,$terminopoliza,$asegurado,$reporta,$atiendeasegurado,$calle,$colonia,$alcandiamupio,$estado,$telefonot,$correo,$cristales,$aseguradora,$analista,$atiende,$fecharecepcion,$fechamedicion,$fechacotizacion,$fechaautorizacion,$fecharuta,$fechacolocacion,$fechafactura,$complementopago,$deducible, $estatus_siniestro,$maestro_colocador,$observaciones)
	{
		$sql="UPDATE tragico SET siniestro='$siniestro',poliza='$poliza',fechareporte='$fechareporte',fechasiniestro='$fechasiniestro',vigenciapoliza='$vigenciapoliza',terminopoliza='$terminopoliza',asegurado='$asegurado',
reporta='$reporta',atiendeasegurado='$atiendeasegurado',calle='$calle',colonia='$colonia',alcandiamupio='$alcandiamupio',estado='$estado',telefonot='$telefonot',correo='$correo',cristales='$cristales',aseguradora='$aseguradora',analista='$analista',atiende='$atiende',
fecharecepcion='$fecharecepcion',fechamedicion='$fechamedicion',fechacotizacion='$fechacotizacion',fechaautorizacion='$fechaautorizacion',fecharuta='$fecharuta',fechacolocacion='$fechacolocacion',fechafactura='$fechafactura',complementopago='$complementopago',deducible='$deducible',estatus_siniestro='$estatus_siniestro',maestro_colocador='$maestro_colocador',observaciones='$observaciones'
 WHERE idmovint='$idmovint'";
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
		$sql="SELECT * FROM tragico WHERE idmovint='$idmovint'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tragico t INNER JOIN usuario u on t.analista=u.idusuario  ORDER BY idmovint DESC";
		//$sql="SELECT idmovint,siniestro,fechareporte,asegurado,aseguradora FROM `tragico` where aseguradora='SEGUROS SURA'";
		return ejecutarConsulta($sql);		
	}
	
		public function listarClienteswhere($idmovin)
	{
		$sql="SELECT * FROM tragico t INNER JOIN usuario u on t.idseguradora=u.idseguradora inner join aseguradora aseg on aseg.idseguradora=u.idseguradora where u.idusuario='$idmovin'  ORDER BY t.idmovint DESC;";
		
		return ejecutarConsulta($sql);		
	}
	
		public function listarClientesall()
	{
		$sql="SELECT * FROM tragico t INNER JOIN usuario u on t.idseguradora=u.idseguradora inner join aseguradora aseg on aseg.idseguradora=u.idseguradora ORDER BY t.idmovint DESC";
		
		return ejecutarConsulta($sql);		
	}
	
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tragico where condicion=1";
		return ejecutarConsulta($sql);		
	}
		public function ventareportsin($idmovint){
		$sql="SELECT * FROM tragico t INNER JOIN usuario u on t.analista=u.idusuario WHERE t.idmovint='$idmovint'";
		return ejecutarConsulta($sql);
	}
}

?>