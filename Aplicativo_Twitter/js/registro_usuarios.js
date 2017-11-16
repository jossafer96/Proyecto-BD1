$("#btn-registrar").click(function(){
	$("#btn-registrar").button("loading");
	var parametros=
				"txt-nombre="+$("#txt-nombre").val()+"&"+
				"txt-apellido="+$("#txt-apellido").val()+"&"+
				"txt-correo="+$("#txt-correo").val()+"&"+
				"txt-contrasena="+$("#txt-contrasena").val()+"&"+
				"slc-genero="+$("#slc-genero").val();
	
	$.ajax({
		url:"ajax/procesar-registro-usuarios.php",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			alert("REGISTRADO");
			$("#btn-registrar").button("reset");
			
		}
	});
});

function Publicar(codigoUsuario){
	

var parametros="codigo-usuario="+codigoUsuario+"&"+
				"txt-contenido="+$("#contenido").val();
				
	$.ajax({
		url:"ajax/acciones.php?accion=1",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			location.reload();
			
		}
	});

}
function Comentar(codigoUsuario,codigoTwitt){
	

var parametros="codigo-usuario="+codigoUsuario+"&"+
				"codigo-twitt="+codigoTwitt+"&"+
				"txt-comentario-"+codigoUsuario+"="+$("#txt-comentario-"+codigoUsuario).val();
				
	$.ajax({
		url:"ajax/acciones.php?accion=2",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			location.reload();
			
		}
	});

}
function Retwitt(codigoUsuario,codigoTwitt){
	

var parametros="codigo-usuario="+codigoUsuario+"&"+
				"codigo-twitt="+codigoTwitt;
				
				
	$.ajax({
		url:"ajax/acciones.php?accion=3",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			location.reload();
			
			
		}
	});

}
function Seguir(codigoUsuario,codigoUsuarioSeguido){
	

var parametros="codigo-usuario="+codigoUsuario+"&"+
				"codigo-UsuarioSeguido="+codigoUsuarioSeguido;
				
				
	$.ajax({
		url:"ajax/acciones.php?accion=4",
		data:parametros,
		method:"POST",
		success:function(respuesta){
			location.reload();
			
			
		}
	});

}
