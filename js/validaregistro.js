$(document).ready( function(){

	// probando el js
	// alert("js activo");


	$('#registro').click(function(){


		vacios=validarFormVacio('frmRegistro');
		if (vacios != 0) {
			alert("Debes llenar los campos vacios");

			return false;
		}

		datos=$('#frmRegistro').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/registrarUsuario.php",
			success:function(r){
				if (r !=0) {
					alert("agregado con exito");
					return true;
				} else {
					alert("fallo al agregar");
					// return false;
				}
			}
		});
	});
});