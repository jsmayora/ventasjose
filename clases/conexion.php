<?php

// CLase que se conecta a la base de datos
/**
 *
 */
class conectar{
	private $host = "localhost";
	private $user = "root";
	private $password = "cltch2984";
	private $bd = "ventas";

	public function conexion()
	{
		// conectarse a la bd
		$conexion = new mysqli($this->host,$this->user,$this->password,$this->bd);

		//  forma 1
		// return $conexion;

		//  forma II
		if ($conexion->connect_errno) {
			# code...
			die("\nFallo la conexión\n" .$conexion->connect_errno);

		} else {
			# code...
			// echo "\nSe conecto\n",
			//  "<br>" .
			 $conexion->host_info .
			   $conexion->select_db($this->bd);
			return $conexion;
		}

	}
}

//  llamar a la class conectar();
// $obj = new conectar();
// $obj->conexion();
// var_dump($obj->conexion());
