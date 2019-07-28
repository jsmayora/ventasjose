<?php 
require_once "usuarios.php";
/**
 * 
 */
class categorias
{
	
	public function agregaCategoria($datos)
	{
		# llamando a la conexión
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		
		$sql = "INSERT INTO categorias(id_usuario,
		nombreCategoria,
		fechaCaptura)
		VALUES ('$datos[0]',
		'$datos[1]',
		'$datos[2]')";
// echo $sql;exit;
		return $resultado=  $conectar->query($sql);
		
	}

	public function actualizaCategoria($datos){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		
		$sql = "UPDATE categorias SET nombreCategoria='$datos[1]'   WHERE id_usuario='$datos[0]' ";
// echo $sql; exit();
		$resultado= $conectar->query($sql);
		// echo "<pre>";
		// print_r($resultado);
		// echo "</pre>"; exit();
		return $resultado;
	}


}
?>