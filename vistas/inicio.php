<?php  

session_start();
if (isset($_SESSION['usuario'])) {
	# code...
	echo $_SESSION['usuario'];

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
	</head>
	<body>

	</body>
	</html>
	<?php 
} else{
	header("../index.php");
}
?>
