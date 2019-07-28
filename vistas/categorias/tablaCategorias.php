
<?php
require_once "../../clases/conexion.php";

$objConectar  = new conectar();
$conexion = $objConectar->conexion();

$sql = "SELECT id_categoria,nombreCategoria  FROM categorias";
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
			if ($resultado->num_rows > 0):
				while ($fila =$resultado->fetch_row()):
					?>	
					<tr>
						<td><?php
						echo $fila[1] ;
						?></td>
						<td>
							<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizarCategoria" onclick="agregaDato('<?php echo $fila[0]; ?>' ,' <?php echo $fila[1]; ?> ')">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>

						</td>
						<td>
							<span class="btn btn-danger btn-xs" onclick="">
								<span class="glyphicon glyphicon-remove"></span>
							</span>
						</td>

					</tr>
				<?php 	endwhile;
				endif; ?>	
			</tbody>

		</table>
	</div>