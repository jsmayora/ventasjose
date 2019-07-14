function validarFormVacio(formulario){
	datos=$('#' + formulario).serialize();
	alert(datos);

	d=datos.split('&');
	alert(d);
	vacios=0;
	for(vacios=0;vacios< d.length;vacios++){
		var controles=d[vacios].split("=");
		alert(controles);
		if(controles[1]=="A" || controles[1]==""){
			vacios++;
			alert(controles[0]);
			alert(vacios);
		}
		alert(vacios);
	} 
	return vacios;
}