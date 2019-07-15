<?php

session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/categorias.php";

$fecha = date('Y-m-d');
$idusaurio = $_SESSION['id_usuario'];
$categoria = $_REQUEST['categoria'];

// echo "idusaurio=\n" .$idusaurio."\n"."categorias=\n".$categoria ."\nFecha=\n" .$fecha; exit;
$datos = array(
	
	$idusaurio,
	$categoria,
	$fecha
); 

$objcategoria = new categorias();

 echo $objcategoria->agregarCategoria($datos);
?>