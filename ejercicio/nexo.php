<?php 
require_once("AccesoDatos.php");
require_once("Cd.php");

	$cd = new Cd();
	$cd->cantante=$_POST['cantante'];
	$cd->titulo=$_POST['titulo'];
	$cd->año=$_POST['anio'];

	var_dump($cd);

/*
$queHago=$_POST['queHacer'];

switch ($queHago) {
	
	case 'GuardarCD':
			$cd = new cd();
			$cd->id=$_POST['id'];
			$cd->cantante=$_POST['cantante'];
			$cd->titulo=$_POST['titulo'];
			$cd->año=$_POST['anio'];
			$cantidad=$cd->GuardarCD();
			echo $cantidad;

		break;
	case 'TraerCD':
			$cd = cd::TraerUnCd($_POST['id']);		
			echo json_encode($cd) ;

		break;
	default:
		# code...
		break;
}*/

 ?>