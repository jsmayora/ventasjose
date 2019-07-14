$(document).ready(function (){

// alertify.alert("JS ctivoS");
$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');

$('#btnAgregarCategoria').click(function(){

	var	vacios=validarFormVacio('frmCategorias');
	if (vacios != 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}

		datos=$('#frmCategorias').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/categorias/agregarCategorias.php",
			success:function(r){
				if (r == 1) {
					// esta linea permite limpiar el formulario al insertar
					$('#frmCategorias')[0].reset();
					$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');
					alertify.alert("Categoria agregada con exito");
				} else {
					alertify.success("No se pudo agregar categoria");
				}

			}
		});
	});
});
