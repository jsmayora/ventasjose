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
	<?php require_once "menu.php"; ?>
</head>
<body>
	
	<div class="container">
		<h1>Articulos</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="" id="frmCategorias">

					<label for="">Categoria</label>
					<input type="text" class="form-control input-sm" name="categoria" id="categoria"></input>
					<p></p><p></p>
					<span class="btn btn-primary" id="btnAgregarCategoria">Agregar</span>

				</form>

				<label></label>
				<select name="" id="input" class="form-control input-sm" required="required">
					<option value=""></option>
				</select>
				<label></label>
				<input type="text" name="" id="" class="form-control input-sm" value=""  title="">
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
 // } 
 //else{
// 	header("location:../index.php");
// }
?>
