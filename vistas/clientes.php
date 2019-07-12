<?php  

// session_start();
// if (isset($_SESSION['usuario'])) {
	# code...
	// echo $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Inicio</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<h1>Clientes</h1>
		<div class="row">
			<div class="col-sm-4">
				
				<form action="" id="frmClientes" >


					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm" value=""  title="">

					<label for="">Apellido</label>
					<input type="text" class="form-control input-sm" name="apellido" id="apellido"></input>
					
					
					<label for="">Dirección</label>
					<input type="text" class="form-control input-sm" name="direccion" id="direccion"></input>

					<label for="">Email</label>
					<input type="text" class="form-control input-sm" name="email" id="email"></input>

					<label for="">Telefono</label>
					<input type="text" class="form-control input-sm" name="telefono" id="telefono"></input>

					<label for="">RFC</label>
					<input type="text" class="form-control input-sm" name="rfc" id="rfc"></input>

					<p></p><p></p>
					<span class="btn btn-primary" id="btnAgregarUsuario">Agregar</span>

				</form>

			</div>
			<div class="col-sm-7">
				
				<div id="tablaClientesLoad">
					
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../js/clientes.js"></script>
</body>
</html>
<?php 
// } else{
// 	header("location:../index.php");
// }
?>
