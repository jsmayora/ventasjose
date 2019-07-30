<?php 
require_once "../../clases/conexion.php";
require_once "../../clases/categorias.php";

$id=$_REQUEST['idcategoria'];


$objCategoria = new categorias();

echo $objCategoria->eliminarCategoria($id);

?>