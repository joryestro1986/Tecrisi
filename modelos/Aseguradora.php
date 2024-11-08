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
	public function insertar($nombreseg)
	{
		$sql="INSERT INTO aseguradora (nombreseg,condicion)
		VALUES ('$nombreseg','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idseguradora,$nombreseg)
	{
		$sql="UPDATE aseguradora SET nombreseg='$nombreseg' WHERE idseguradora='$idseguradora'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idseguradora)
	{
		$sql="UPDATE aseguradora SET condicion='0' WHERE idseguradora='$idseguradora'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idseguradora)
	{
		$sql="UPDATE aseguradora SET condicion='1' WHERE idseguradora='$idseguradora'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idseguradora)
	{
		$sql="SELECT * FROM aseguradora WHERE idseguradora='$idseguradora'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM aseguradora";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM aseguradora where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>