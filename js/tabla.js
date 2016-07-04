"use strict";

$('document').ready(function(){     //siempre para iniciar con codigo Jquery, despues que el DOM haya sido cargado.
									//esto nos puede avisar cuando la pagian este completamente cargada.
	var grupo = 33;			        // Definicion de Variables el nro del grupo

		function obtenerInfo(grupo){   // ###### LLAMADA AJAX MEDIANTE GET  ##########
		$.ajax({
			type: 'GET',
			dataType: 'JSON',					// datos enviados al server
			url: 'http://web-unicen.herokuapp.com/api/group/' + grupo,      // consulta que hacemos por grupo
			success: function(data){        // funcion que se ejecutara cuando el request fue exitoso
						var producto = '';
						var codigo = '';
						var colores = '';
						var talles = '';
						var textura = '';
						var descripcion = '';
						var registro = '';
						$('#descripcion-lista').html('');                    //tbody de mi tabla
						for (var i = 0 ; i < data.information.length ; i++){
							producto = data.information[i]['thing'][0];
							codigo = data.information[i]['thing'][1];
							colores = data.information[i]['thing'][2];							// ####### RECIBIMOS INFORMACION Y EDITAMOS EL DOM  #########
							talles = data.information[i]['thing'][3];
							textura = data.information[i]['thing'][4];
							descripcion = data.information[i]['thing'][5];
							registro = '<tr><td class="horario">' + producto + '</td><td>' + codigo + '</td><td>' + colores + '</td><td>' + talles + '</td><td>' + textura + '</td><td>' + descripcion	+  '</td></tr>';
							$('#descripcion-lista').append(registro);				// añadimos
						}
					},
			error: function(){     				// funcion que se ejecutara cuando el request tuvo un error
						alert('Error, no se  puede cargar la tabla');
					}
		});
	};

		function agregarInfo(grupo){
			var producto = $('#producto').val();
			$('#producto').val('');
			var codigo = $('#codigo').val();
			$('#codigo').val('');
			var colores = $('#colores').val();
			$('#colores').val('');
			var talles = $('#talles').val();
			$('#talles').val('');
			var textura = $('#textura').val();
			$('#textura').val('');
			var descripcion = $('#descripcion').val();
			$('#descripcion').val('');


			var registro = [producto, codigo, colores, talles, textura, descripcion];
			var registroCompleto = {
					'group': grupo,
					'thing': registro    // En esta caso tengo un arreglo, pero se recomiendo un objeto JSON es mas ligero
				};
			if( producto.length > 0 & codigo.length > 0 & colores.length > 0 & talles.length > 0 & textura.length > 0 & descripcion.length > 0){
				$.ajax({
					type: 'POST',
					dataType: 'JSON',						// el tipo de informacion que se espera recibir como respuesta del servidor
					data: JSON.stringify(registroCompleto),		  //enviamos el objeto serializado. stringify convierte el objeto a la cadena de texto lista para enviar
					contentType: 'application/json; charset=utf-8',
					url: 'http://web-unicen.herokuapp.com/api/create',
					success: function(data){
								obtenerInfo(grupo);
							},
					error: function(data){
								alert("Error!! no se cargo info");
								obtenerInfo(grupo);
							}
				});
			} else {
				alert('advertencia! agrege algo');
				obtenerInfo(grupo);
			};
		};

	 obtenerInfo(grupo);  //iniciamos la pagina solicitando la info q tenga

	$('#agregar-descripcion').on('click', function(event){
		event.preventDefault();
		agregarInfo(grupo);
	});
});
