<?php 

/**
 * 
 */
class categorias
{
	
	public function agregarCategoria($datos)
	{
		# llamando a la conexión
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();

		$sql = "
		INSERT INTO categorias (
		id_usuario,
		nombreCategoria,
		fechaCaptura 
		)
		VALUES 
		( '$datos[0]',
		  '$datos[1]',
		  '$datos[2]')

		";

		return $conectar->query($sql);

	}
}
?>