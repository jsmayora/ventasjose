<?php  

session_start();
if (isset($_SESSION['usuario'])) {
	# code...
	// echo $_SESSION['usuario'];

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		
		<title>Inicio</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
	<div class="contanier">
		<div class="col">
			<p>...</p>
		</div>
	</div>	

	</body>
	</html>
	<?php 
} else{
	header("location:../index.php");
}
?>
