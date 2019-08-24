<?php
// session_id();
session_start();

require_once "../../clases/conexion.php";
require_once "../../clases/usuarios.php";

$obj= new usuarios();
// $usuario = $_POST['usuario'];
//  $password = $_POST['password'];exit;
 $datos = array(

	$_POST['usuario'],
	$_POST['password']
);

// echo $datos[0]."\n" . $datos[1];exit;
echo $obj->loginUser($datos);


?>