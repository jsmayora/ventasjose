$(document).ready(function (){

// alertify.alert("JS ctivoS");
$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');

$('#btnAgregarCategoria').click(function(){

	var	vacios=validarFormVacio('frmCategorias');
	if (vacios > 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}

	datos=$('#frmCategorias').serialize();
	$.ajax({
		type:"POST",
		data:datos,
		url:"../procesos/categorias/agregarCategorias.php",
		success:function(r){
			if (r==1) {
					// esta linea permite limpiar el formulario al insertar
					$('#frmCategorias')[0].reset();
					$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');
					alertify.success("Categoria agregada con exito");
				} else {
					alertify.error("No se pudo agregar categoria");
				}

			}
		});
});

//  Varlidar los campos de la modal actualizar
$('#btnactualizaCategoria').click(function(){

	datos=$('#frmCategoria').serialize();
	$.ajax({
		type:"POST",
		data:datos,
		url:"../procesos/categorias/actualizaCategoria.php",
		success:function(r){
			if (r==1) {

				$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');
				// alertify.succes("Actualizador categoria con exito");
				alert(r);
			} else {
				alertify.error("No se pudo actualizar");
			}
		}
	});
});


});
// Editar datos modal
function agregaDato(id_categoria,categoria){
	// alert("Estoy en agregaDato");
	$('#id_categoria').val(id_categoria);
	$('#categoriaU').val(categoria);
}