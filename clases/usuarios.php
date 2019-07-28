<?php 
// require_once "conexion.php";
/**
 * 
 */
class usuarios
{
	
	function registroUsuario($datos)
	{
		# code...
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		$fecha = date('Y-m-d');

		$sql = "INSERT INTO usuarios (
		nombre,
		apellido,
		email,
		-- usuario,
		password,
		fechaCaptura) VALUES(
		'$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',

		'$fecha')";
		// forma I
		// echo "<pre>";
		// print_r($sql);
		// echo "</pre>";
		// exit;
		return $conectar->query($sql);

		// form II
		// $resultado = $conectar->query($sql);
		// if ( $resultado === true) {

		// 	# code...

		// 	echo "\nSe inserto un nuevo registro\n";
		// } else {
		// 	# code...

		// 		echo "Error: " . $sql . "<br>" . $conectar->error;


		// }
	}

	public function loginUser($datos){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		$password = sha1($datos[1]);

		
		$_SESSION['usuario'] = $datos[0];
		$_SESSION['iduser']=self::traeID($datos);
// exit;
		$sql= "SELECT  email,password FROM  usuarios
		WHERE   email  = '$datos[0]'
		AND	   password ='$password'";
		
		$resultado = $conectar->query($sql);

		if ($resultado->num_rows > 0) {
			# code...
			return 1;
			
		} else {
			# code...
			return 0;
			// return 0;
		}
		
	}

	public function traeID($datos){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		$password=sha1($datos[1]);
		$sql= "SELECT  id_usuario FROM  usuarios
		WHERE   email  = '$datos[0]'
		AND password ='$password'";
		$resultado=$conectar->query($sql);

		
		 $fila=$resultado->fetch_row();
		 return $fila[0];

		
	}
	
}

// $obj = new conectar();
// $conexion = $obj->conexion();

// $sql = "
// SELECT * FROM usuarios 	
// WHERE  email='jmayora'";

// $resultado = $conexion->query($sql);
// $validar=0;
// if ($resultado->num_rows > 0) {
// 		# code...
// 	$validar = 1;
// }