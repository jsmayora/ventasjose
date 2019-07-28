<?php
// session_id();
session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/categorias.php";

	$fecha=date("Y-m-d");
	$idusuario=$_SESSION['iduser'];
	 $categoria=$_POST['categoria'];

// echo "id= ".
// echo " categoria ". exit();
	$datos=array(
		$idusuario,
		$categoria,
		$fecha
				);

	$obj= new categorias();
	echo $obj->agregaCategoria($datos);

?>