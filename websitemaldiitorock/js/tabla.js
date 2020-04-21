"use strict";

$('document').ready(function(){     //siempre para iniciar con codigo Jquery, despues que el DOM haya sido cargado.
									//esto nos puede avisar cuando la pagian este completamente cargada.
	var grupo = 32;			        // Definicion de Variables el nro del grupo

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
						var eliminar = '';
						var registro = '';
						$('#descripcion-lista').html('');                    //tbody de mi tabla
						for (var i = 0 ; i < data.information.length ; i++){
							producto = data.information[i]['thing']['producto'];
							codigo = data.information[i]['thing']['codigo'];
							colores = data.information[i]['thing']['colores'];							// ####### RECIBIMOS INFORMACION Y EDITAMOS EL DOM  #########
							talles = data.information[i]['thing']['talles'];
							textura = data.information[i]['thing']['textura'];
							descripcion = data.information[i]['thing']['descripcion'];
							eliminar = '<input class="btn btn-danger eliminar" type="button" value="eliminar"></input>';
							registro = '<tr><td class="horario">' + producto + '</td><td>' + codigo + '</td><td>' + colores + '</td><td>' + talles + '</td><td>' + textura + '</td><td>' + descripcion	+  '</td><td>' + eliminar +'</td></tr>';
							$('#descripcion-lista').append(registro);				// añadimos
						}
						var btnsEliminar = $('.eliminar');
						for (var i = 0; i < btnsEliminar.length; i++) {
							aEliminar(i,data.information[i]['_id']);
						}
					},
			error: function(){     				// funcion que se ejecutara cuando el request tuvo un error
						alert('Error, no se  puede cargar la tabla');
					}
		});
	};

	function aEliminar(i,id){
		var btn = $(".eliminar")[i];
		btn.onclick = function(){
			eliminarInfo(id);
		}
	}

	function eliminarInfo(item){
		var id = item;
		$.ajax({
			url:"http://web-unicen.herokuapp.com/api/delete/" + id,
	    method:"DELETE",
	    success: function(data){
	      obtenerInfo(grupo);
	    },
	    error:function(jqxml, status, errorThrown){
	      alert('No se puedo eliminar!');
	    }
		});
	}

		function agregarInfo(grupo){

			var registro = {			// objeto JSON
				"producto": " ",
				"codigo": " ",
				"colores": " ",
				"talles": " ",
				"textura": " ",
				"descripcion": " "
			};

			var prod = $('#producto').val();			//asigno el valor del input
			$('#producto').val('');									//seteo el input
			var cod = $('#codigo').val();
			$('#codigo').val('');
			var colo = $('#colores').val();
			$('#colores').val('');
			var talle = $('#talles').val();
			$('#talles').val('');
			var textu = $('#textura').val();
			$('#textura').val('');
			var descrip = $('#descripcion').val();
			$('#descripcion').val('');

			registro.producto = prod;     //asigno el valor del input
			registro.codigo = cod;
			registro.colores = colo;
			registro.talles = talle;
			registro.textura = textu;
			registro.descripcion = descrip;

			var registroCompleto = {
					'group': grupo,
					'thing': registro    // En esta caso tengo un arreglo, pero se recomiendo un objeto JSON es mas ligero
			};

			if( prod.length > 0 & cod.length > 0 & colo.length > 0 & talle.length > 0 & textu.length > 0 & descrip.length > 0){
				$.ajax({
					method: "POST",
					dataType: 'JSON',						// el tipo de informacion que se espera recibir como respuesta del servidor
					data: JSON.stringify(registroCompleto),	  //enviamos el objeto serializado. stringify convierte el objeto a la cadena de texto lista para enviar
					contentType: 'application/json; charset=utf-8',
					url: "http://web-unicen.herokuapp.com/api/create",
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
