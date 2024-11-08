<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Persona
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($idregfiscal,$desc)
	{
		$sql="INSERT INTO regimenfiscal (idregfiscal,desc)
		VALUES ('$idregfiscal','$desc')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idregfiscal,$desc)
	{
		$sql="UPDATE regimenfiscal SET desc='$desc' WHERE idregfiscal='$idregfiscal'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para eliminar categorías
	public function eliminar($idregfiscal)
	{
		$sql="DELETE FROM regimenfiscal WHERE idregfiscal='$idregfiscal'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idregfiscal)
	{
		$sql="SELECT * FROM regimenfiscal WHERE idpersona='$idpersona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros 
	public function listar()
	{
		$sql="SELECT * FROM regimenfiscal";
		return ejecutarConsulta($sql);		
	}
}

?>