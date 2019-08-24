
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
	header("location:index.php"); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body style="background-color: gray;">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">

				<div class="panel  panel-danger ">
					<div class="panel panel-heading "  style="padding: 4%;">Registrar administrador</div>

					<div class="panel panel-body">

						<form class="form" id="frmRegistro" action="" method="" >
							<!-- action="php/registro.php"method="post"  -->
							<input type="hidden" name="accion" id="accion" value="insertar" />
							<label>Nombre</label>
							<input type="text"  class="form-control input-sm" id="nombre" name="nombre">

							<label>Apellido</label>
							<input type="text"  class="form-control input-sm" id="apellido" name="apellido">
							<!-- <label>email</label>
								<input type="email"  class="form-control input-sm" id="email" name="email"> -->

								<label>Usuario</label>
								<input type="text"  class="form-control input-sm" id="email" name="email">

								<label>Password</label>
								<input type="text"  class="form-control input-sm" id="password" name="password">	
								<p></p>
								<span  class="btn btn-primary"id="registro">Registrar</span>

								<!-- <div style="text-align: right;"> -->
									<a href="index.php"  class=" btn  btn-info ">Regresar Login</a>
									<!-- </div> -->


								</form>
							</div>

						</div>
						<div class="col-sm-4"></div> 
					</div>
				</div>

				<script type="text/javascript" src="js/funciones.js"></script>
				<script type="text/javascript" src="js/validaregistro.js"></script>

			</body>
			</html>


