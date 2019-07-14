<?php

session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/categorias.php";

$fecha = date('Y-m-d');
$idusaurio = $_SESSION['iduser'];
$categoria = $_POST['categoria'];

$datos = array(
	
	$idusaurio,
	$categoria,
	$fecha
); 

$objcategoria = new categorias();

 echo $objcategoria->agregarCategoria($datos);
?>