<?php  

session_start();
if (isset($_SESSION['usuario'])) {
	# code...
	// echo $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Ventas</title>
	<?php include_once "menu.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Ventas de Productos</h1>
		<div class="row">
			<div class="col-sm-12">

				<span class="btn btn-primary" id="VentaProductosBtn"> Vender productos</span>		
				<span class="btn btn-primary" id="VentasHechasBtn">Ventas hechas</span>		
			</div>

		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="VentaProductos" id="VentaProductos"></div>
				<div class="VentasHechas" id="VentasHechas"></div>
			</div>
		</div>
	</div>




	<script type="text/javascript" src="../js/ventas.js"></script>
	<script type="text/javascript" src="../js/ventas/ventasDeProductos.js"></script>
	<script type="text/javascript" src="../js/ventas/ventasReportes.js"></script>
</body>
</html>
<?php 
} else{
	header("location:../index.php");
}
?>
