$(document).ready( function(){

	// probando el js
	// alertify.alert("js activo");


	$('#registro').click(function(){


	vacios=validarFormVacio('frmRegistro');
		if (vacios >0) {
			alertify.alert("Debes llenar los campos vacios");

			return false;
		}

		datos=$('#frmRegistro').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/registrarUsuario.php",
			success:function(r){
				if (r==1) {
					alertify.success("agregado con exito");
					// return true;
				} else {
					alertidy.error("fallo al agregar");
					// return false;
				}
			}
		});
	});
});