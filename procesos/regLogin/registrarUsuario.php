<?php 

require_once "../../clases/conexion.php";
require_once "../../clases/usuarios.php";
$obj = new usuarios();

$pass = sha1($_REQUEST['password']);

$datos = array( 
	$_REQUEST['nombre'],
	$_REQUEST['apellido'],
	// $_REQUEST['email'],
	$_REQUEST['usuario'],
	$pass
);
echo $obj->registroUsuario($datos);


?>