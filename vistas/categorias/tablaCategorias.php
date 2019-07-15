
<?php
require_once "../../clases/conexion.php";

$cnn = new conectar();
$conexion = $cnn->conexion();

$sql = "SELECT   nombreCategoria FROM categorias";
$resultado = $conexion->query($sql);
?>
<div class="table-responsive">
	<table class="table table-hover table-condensend table-bordered" style="text-align: center;">
		<caption><label>Categorias</label> </caption>
		<thead>
			<tr>
				<th>Categoria</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($fila =$resultado->fetch_row()):
			// {
	# code...
			// }

			?>	
			<tr>
				<td><?php echo $fila[0]; ?></td>
				<td>
					<span class="btn btn-warning btn-xs">
						<span class="glyphicon glyphicon-pencil"></span>
					</span>

				</td>
				<td>
					<span class="btn btn-danger btn-xs">
						<span class="glyphicon glyphicon-remove"></span>
					</span>
				</td>
				
			</tr>
			<?php 	endwhile;	 ?>	
		</tbody>

	</table>
</div>