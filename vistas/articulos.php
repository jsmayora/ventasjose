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
		<?php
		require_once "menu.php";
		require_once "../clases/conexion.php";

		$objConectar = new conectar();
		$conectar = $objConectar->conexion();

		$conectar->seleccionarCategoria();

		?>
	</head>
	<body>

		<div class="container">
			<h1>Articulos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form action="" id="frmArticulos" enctype="multipart/form-data">


						<label>Selecciona Categoria</label>
						<select name="" id="input" class="form-control input-sm" name="categoriaSelect" id="categoriaSelect">
							<option value="A">Selecciona Categoria</option>
							<?php 
							while ($fila= $resultado->fetch_row()):

								?>
							<option value="<?php echo $fila[0]; ?>"><?php echo $fila[1]; ?>	</option>
						<?php  endwhile; ?>
					</select>
					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm" value=""  title="">

					<label for="">Categoria</label>
					<input type="text" class="form-control input-sm" name="categoria" id="categoria"></input>

					<label>Descripción</label>
					<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" value=""  title="">

					<label for="">Cantidad</label>
					<input type="text" class="form-control input-sm" name="cantidad" id="cantidad"></input>


					<label for="">Precio</label>
					<input type="text" class="form-control input-sm" name="precio" id="precio"></input>

					<label for="">Imagen de Item</label>
					<input type="file" class="form-control input-sm" name="imagen" id="imagen"></input>

					<p></p><p></p>
					<span class="btn btn-primary" id="btnAgregarArticulo">Agregar</span>

				</form>


			</div>
			<div class="col-sm-8">
				<div id="tablaArticulosLoad"></div>
			</div>
		</div>
	</div>



	<script type="text/javascript" src="../js/articulos.js"></script>
</body>
</html>
<?php 
} 
else{
	header("location:../index.php");
}
?>
