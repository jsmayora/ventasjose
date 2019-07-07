function validarFormVacio(formulario){
		datos=$('#' + formulario).serialize();
			alert(datos);

		d=datos.split('&');
		alert(d);
		vacios=0;
		for(i=0;i< d.length;i++){
				controles=d[i].split("=");
				alert(vacios);
				if(controles[1]=="A" || controles[1]==""){
					vacios++;
					alert(controles[0]);
					alert(vacios);
				}
		}alert(vacios);
		return vacios;
	}