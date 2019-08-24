<?php 

require_once "../../clases/conexion.php";
require_once "../../clases/categorias.php";


$datos= array(

	$_REQUEST['id_categoria'],
	$_REQUEST['categoriaU']
);

// echo $datos[0].$datos[1]; exit();

$objActualizarCategoria = new categorias();

$objActualizarCategoria->actualizaCategoria($datos);
?>