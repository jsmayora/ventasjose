  <?php  

 session_start(); if (isset($_SESSION['usuario'])) {
	# code...
 	// echo $_SESSION['usuario'];

 	?> 

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>

 		<title>Categorias</title>
 		<?php require_once "menu.php"; ?>
 	</head>
 	<body>

 		<div class="container">
 			<h1>Categorias</h1>
 			<div class="row">
 				<div class="col-sm-4">
 					<form action="" id="frmCategorias">

 						<label for="">Categoria</label>
 						<input type="text" class="form-control input-sm" name="categoria" id="categoria"></input>
 						<p></p><p></p>
 						<span class="btn btn-primary" id="btnAgregarCategoria">Agregar</span>

 					</form>
 				</div>
 				<div class="col-sm-4">
 					<div id="tablaCategoriaLoad"></div>
 				</div>
 			</div>
 		</div>


 		<!-- Script de validacion -->
 		<script type="text/javascript" src="../js/categorias.js"></script>
 	</body>
 	</html>
  <?php } else{ 
  	 header("location:../index.php"); } ?>  
