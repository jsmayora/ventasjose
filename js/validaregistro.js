$(document).ready( function(){

	// probando el js
	// alert("js activo");


	$('#registro').click(function(){


	var	vacios=validarFormVacio('frmRegistro');
		if (vacios ==1) {
			alertify.alert("Debes llenar los campos vacios");

			return false;
		}

		datos=$('#frmRegistro').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/registrarUsuario.php",
			success:function(r){
				if (r ==1) {
					alertify.alert("agregado con exito");
					return true;
				} else {
					alertidy.alert("fallo al agregar");
					// return false;
				}
			}
		});
	});
});