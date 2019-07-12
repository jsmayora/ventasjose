$(document).ready(function(){


	$('#tablaClientesLoad').load('clientes/tablaClientes.php');

	$('#btnAgregarClientes').click(function(){

		var	vacios=validarFormVacio('frmClientes');
		if (vacios != 0) {
			alertify.alert("Debes llenar los campos vacios");

			return false;
		}


		datos=$('#frmClientes').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../clientes/agregarClientes.php",
			success:function(r){

				if (r == 1) {
					$('#tablaClientesLoad').load('clientes/tablaClientes.php');
					alertify.success("Agregado con exito");
				} else {
					alertify.error("No se pudo agregar");
				}

			}
		});
	});
	



});