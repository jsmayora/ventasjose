<?php 

require_once "clases/conexion.php";

$obj = new conectar();
$conexion = $obj->conexion();

$sql = "
SELECT * FROM usuarios 	
WHERE  email='jmayora'";

$resultado = $conexion->query($sql);
$validar=0;
if ($resultado->num_rows > 0) {
		# code...
	$validar = 1;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body  style="background: gray;">
	<br><br><br>
	<!-- contenerdor -->
	<div class="conteiner">

		<!-- fila que contiene al  login -->
		<div class="row">

			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class=" panel panel-primary ">
					<div class="panel panel-heading bg-primary "  style="padding: 4%;">Sistema de ventas y almacen</div> 	
					<div class="panel panel-body"  style="padding: 4%;">

						<div style="text-align: center;">
							<img src="img/ventas.jpg" height="190">
						</div>


						<form class="form" id="frmLogin"  >
							<!-- action="php/registro.php"method="post"  -->
							<iput type="hidden" name="submit" value="1" />

							<label>Usuario</label>
							<input type="text"  class="form-control input-sm" id="usuario" name="usuario">

							<label>Password</label>
							<input type="password"  class="form-control input-sm" id="password" name="password">	
							
							<p></p>
							<span class="btn btn-primary" id="entrarSistema" name="entrarSistema">Entrar</span>
							
							<?php if (!$validar):
							?>
							<a href="registro.php" class="btn btn-danger">Registro</a>
							<?php endif;  ?>
						</form>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<!-- fin de la fila que contiene al  login -->
		</div>
		<script type="text/javascript" src="js/validaind.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
	</body>
	</html>


