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
// echo "\nEstoy en función login usuario\n".$datos[0]."\n" . $datos[1]. "\n". $password;exit;
		$_SESSION['usuario'] = $datos[0];
		$_SESSION['id_usuario'] =  self::traeID($datos);
// exit;
		$sql = 
		"SELECT * FROM  usuarios
		WHERE email= '$datos[0]' 
		AND password='$password'";	
		// echo $sql;exit;
		$resultado = $conectar->query($sql);

		if ($resultado->num_rows > 0) {
			# code...
			return 1;
		} else {
			# code...
			return 0;
		}
		
	}

	public function traeID($datos){
		$objConectar = new conectar();
		$conectar = $objConectar->conexion();
		$password=sha1($datos[1]);
		$sql= "
		SELECT  id_usuario FROM  usuarios
		WHERE  email = '$datos[0]'
		AND	   password ='$password'";
		$resultado=$conectar->query($sql);

		
		return $resultado->num_rows[0];

	}
}