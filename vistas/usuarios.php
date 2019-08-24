<?php  

session_start();
if (isset($_SESSION['usuario'])) {
	# code...
	// echo $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<title>Usuarios</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Administrar Usuarios</h1>
		<div class="row">

			<div class="col-sm-4">
				<form action="" id="frmUsuarios" >


					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm" value=""  title="">

					<label for="">Apellido</label>
					<input type="text" class="form-control input-sm" name="apelldio" id="apelldio"></input>
					
					<label>Usuario</label>
					<input type="text" name="usuario" id="usuario" class="form-control input-sm" value=""  title="">

					<label for="">Password</label>
					<input type="text" class="form-control input-sm" name="password" id="password"></input>

					<p></p><p></p>
					<span class="btn btn-primary" id="btnAgregarClientes">Agregar</span>

				</form>

			</div>
			<div class="col-sm-8" >
				<div id="tablaUsuario" class="tablaUsuario">

				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="../js/usuarios.js"></script>
</body>
</html>
<?php 
} else{
	header("location:../index.php");
}
?>