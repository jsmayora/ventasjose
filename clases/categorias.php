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
		fechaCaptura)		VALUES ('$datos[0]',
		'$datos[1]',
		'$datos[2]')";
// echo $sql;exit;
		return $resultado=  $conectar->query($sql);
		
	}

	public function actualizaCategoria($datos){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		
		$sql = "UPDATE categorias SET nombreCategoria='$datos[1]'   WHERE id_categoria='$datos[0]' ";
// echo $sql; exit();
		$resultado= $conectar->query($sql);

		// echo "<pre>";
		// print_r($resultado);
		// echo "</pre>"; exit();
		echo $resultado;
	}
	public function eliminarCategoria($idCategoria){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();

		$sql="DELETE FROM categorias 
		WHERE id_categoria='$idCategoria'";

		$resultado= $conectar->query($sql);
		return $resultado;

	}

//  ver opciones
	public function seleccionarCategoria(){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();

		$sql="SELECT id_usuario,nombreCategoria FROM categorias ";

		$resultado= $conectar->query($sql);
		return $resultado;
	}

}
?>