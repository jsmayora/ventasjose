$(document).ready(function(){

// load que carga la tabla
// alertify.alert("hola");
$('#tablaUsuario').load('usuarios/tablaUsuarios.php');

$('#btnAgregarUsuario').click(function(){

	var	vacios=validarFormVacio('frmUsuarios');
	if (vacios > 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}


	datos=$('#frmUsuarios').serialize();
	$.ajax({
		type:"POST",
		data:datos,
		url:"../procesos/regLogin/registrarUsuario.php",
		success:function(r){
			if (r == 1) {
				$('#tablaUsuario').load('usuarios/tablaUsuarios.php');
				alertify.success("Agregado con exito");
			} else {
				alertify.error("Fallo al agregar");
			}
		}
	});
});



});