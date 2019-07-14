$(document).ready( function(){

// alertify.alert("JS ACTIVO");
// VentaProductos
$('#VentaProductosBtn').click(function(){
escondeSeccionVentas();
$('#VentaProductos').load('ventas/vetantasDeproductos.php');
$('#VentaProductos').show();
	
});


// Ventashechas
$('#VentasHechasBtn').click(function(){
escondeSeccionVentas();
$('#VentasHechas').load('ventas/ventasReportes.php');
$('#VentasHechas').show();
	
});


function escondeSeccionVentas(){

	$('#VentaProductos').hide();
	$('#VentasHechas').hide();
}


});