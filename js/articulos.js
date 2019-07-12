$(document).ready(function(){


// alertify.alert("HOLA JS ACTIVO");
$('#tablaArticulosLoad').load('articulos/tablaArticulos.php');


$('#btnAgregarArticulo').click(function(){

	var	vacios=validarFormVacio('frmArticulos');
	if (vacios != 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}


	datos=$('#frmArticulos').serialize();
	$.ajax({
		type:"POST",
		data:datos,
		url:"../procesos/articulos/agregararticulos.php",
		success:function(r){
			if (r == 1) {
				$('#tablaArticulosLoad').load('articulos/tablaArticulos.php');
				alertify.success("Agregado con exito");
			} else {
				alertify.error("No se pudo agregar");
			}
		}
	});
});



});