<?php 
session_start();

require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

$obj= new usuarios();
// $usuario = $_POST['usuario'];
 // $password = $_POST['password'];
 $datos = array(
	$_POST['usuario'],
	$_POST['password']
);

// echo $datos[0]."\n" . $datos[1];exit;
echo $obj->loginUser($datos);


?>