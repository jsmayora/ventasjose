$(document).ready(function(){

// alert("activo js");
$('#entrarSistema').click(function(){

	vacios=validarFormVacio('frmLogin');
	alert(vacios);
	if (vacios ==1) {
		alert("Debes llenar los campos vacios");

		return false;
	}

	datos=$('#entrarSistema').serialize();
	alert(datos);
	$.ajax({
		type:"POST",
		data:datos,
		url:"procesos/regLogin/login.php",
		success:function(r){
			if (r ==1){
				window.location ="vistas/inicio.php";
			} else {
				alert("No se pudo acceder :( ");
			}
		}
	});
});
});