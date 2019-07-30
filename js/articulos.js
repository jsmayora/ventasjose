$(document).ready(function(){


// alertify.alert("HOLA JS ACTIVO");
$('#tablaArticulosLoad').load('articulos/tablaArticulos.php');


$('#btnAgregarArticulo').click(function(){

	/*var	vacios=validarFormVacio('frmArticulos');
	if (vacios != 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}*/


// 	datos=$('#frmArticulos').serialize(); // serialize no envia imagenes por ese motivo se cambia este codigo
// 	$.ajax({
// 		type:"POST",
// 		data:datos,
// 		url:"../procesos/articulos/agregararticulos.php",
// 		success:function(r){
// 			if (r == 1) {
// 				$('#tablaArticulosLoad').load('articulos/tablaArticulos.php');
// 				alertify.success("Agregado con exito");
// 			} else {
// 				alertify.error("No se pudo agregar");
// 			}
// 		}
	// });


//  codigo que valida y permite subir imagenes a la bd
var formData = new FormData(document.getElementById("frmArticulos"));

$.ajax({
	url: "../procesos/articulos/agregarArticulos.php",
	type: "post",
	dataType: "html",
	data: formData,
	cache: false,
	contentType: false,
	processData: false,

	success:function(r){
			alert(r);
		if(r == 1){
			$('#frm')[0].reset();
			$('#tablaArticulosLoad').load('articulos/tablaArticulos.php');
			alertify.success("Agregado con exito :D");
		}else{
			alertify.error("Fallo al subir el archivo :(");
		}
	}
});
});








});