<h4>Vender un Producto</h4>

<div class="row">
	<div class="col-sm-4">
		
		<form  id="formVentasProductos" action="" method="POST" role="">
			<legend>Formulario</legend>


			<label for="input-id" class="">Seleccionar Cliente</label>	
			<select name="clienteVenta" id="clienteVenta" class="form-control input-sm">
				<option value="A">Seleccione</option>
			</select>

			

			<label for="" class="">Producto</label>	
			<select name="productoVenta" id="productoVenta" class="form-control input-sm">
				<option value="A">Seleccione</option>
			</select>

			<label>Descripción</label>
			<textarea name="" id="" class="form-control" rows="3" ></textarea>

			<label for="" class="">Cantidad</label>	
			<input type="text" name="" id="" class="form-control input-sm">

			<label for="" class="">Precio</label>	
			<input type="text" name="" id="" class="form-control input-sm" >
			<p></p>

			<span class="btn btn-primary" id="btnAgregarVenta">Agregar</span>		
			<span class="btn btn-danger" id="btnVaciarTabla">Vaciar Tabla</span>		
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		</form>

	</div>
</div>