$(document).ready(function (){

// alertify.alert("JS ctivoS");
$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');

$('#btnAgregarCategoria').click(function(){

// agregar categoria
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
				alertify.success("Actualizador categoria con exito");
				
			} else {
				alertify.error("No se pudo actualizar");
			}
		}
	});
});


});
// Editar datos modal
function agregaDato(idcategoria,categoria){
	// alert("Estoy en agregaDato");
	$('#id_categoria').val(idcategoria);
	$('#categoriaU').val(categoria);
}

// Eliminar registro de la tbl
function eliminaCategoria(idcategoria){
	alertify.confirm('¿Desea eliminar esta categoria?', function(){
		$.ajax({
			type:"POST",
			data:"idcategoria=" + idcategoria,
			url:"../procesos/categorias/eliminaCalegoria.php",
			success:function(r){
				if(r==1){
					$('#tablaCategoriaLoad').load('categorias/tablaCategorias.php');
					alertify.success("Eliminado con exito");
				} else{
					alertify.error("No se pudo eliminar");
				}

			}
		});
	}, function(){
		alertify.error('Cancelado!');
	});
}