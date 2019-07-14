<?php 
session_start();

require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

$obj= new usuarios();
// echo $usuario = $_POST['usuario'];
// echo $password = $_POST['password'];
 $datos = array(
	$_POST['usuario'],
	$_POST['password']
);


echo $obj->loginUser($datos);


?>