<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Regimenfiscal
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($idregfiscal,$descregf) 
	{
		$sql="INSERT INTO regimenfiscal (idregfiscal, descregf )	VALUES ('$idregfiscal','$descregf' )";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idregf,$idregfiscal,$descregf)
	{
		$sql="UPDATE regimenfiscal SET descregf='$descregf', idregfiscal='$idregfiscal'  WHERE idregf='$idregf'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idregf)
	{
		$sql="UPDATE regimenfiscal SET condicion='0' WHERE idregf='$idregf'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idregf)
	{
		$sql="UPDATE regimenfiscal SET condicion='1' WHERE idregf='$idregf'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idregf)
	{
		$sql="SELECT * FROM regimenfiscal WHERE idregf='$idregf'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM regimenfiscal";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM regimenfiscal where condicion=1";
		return ejecutarConsulta($sql);		
	}
	
	//Implementar un método para listar los registros 
	public function listarRegfiscal()
	{
		$sql="SELECT * FROM regimenfiscal WHERE condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>