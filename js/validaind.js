$(document).ready(function(){

// alert("activo js");
$('#entrarSistema').click(function(){

	 vacios=validarFormVacio('frmLogin');
	// alert(vacios);
	if (vacios > 0) {
		alertify.alert("Debes llenar los campos vacios");

		return false;
	}

	datos=$('#frmLogin').serialize();
	// alert(datos);
	$.ajax({
		type:"POST",
		data:datos,
		url:"procesos/regLogin/login.php",
		success:function(r){
			if (r==1){
				window.location ="vistas/inicio.php";
				// return 1;
			} else {
				alertify.error("No se pudo acceder :( ");
			}
		}
	});
});



});