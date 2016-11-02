<?php
require_once("AccesoDatos.php");
class Cd
{
	public $id;
	public $interpret;
	public $jahr;
	public $titel;
	
	public static function TraerTodos()
	{
		//return "llego";
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		
		$sql = "SELECT id, interpret, jahr, titel
				FROM cds";

		$consulta = $objetoAccesoDato->RetornarConsulta($sql);
		$consulta->execute();

		return $consulta->fetchall();
		//return $consulta->fetchall(PDO::FETCH_CLASS, "Cd");
		
	}

	public static function InsertarElCd($obj)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into cds (titel,interpret,jahr)values('$obj->titulo','$obj->cantante','$obj->año')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();				

	 }
}