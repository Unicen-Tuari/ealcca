/*declaramos las seciones que tenemos*/
$('document').ready(function(){
	inicio = 'inicio';
	conocenos = 'conocenos';
	chef = 'chef';
	pasteleria = 'pasteleria';
	barman = 'barman';
	eventos = 'eventos';
	cocteleria = 'cocteleria';
	minichef = 'minichef';
	curricula = 'curricula';
	servicios = 'servicios';
	anotar = 'anotar';
	contacto = 'contacto';

	/* La funcion que cargara la pagina segun la seccion */
	function cargarSeccion(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url:seccion+'.html',
			success: function(data){
						$('#contenedor-principal').html(data);
					},
			error: function(){
						alert('No se puede cargar la pagina ' + seccion);
					}
		});
	};

	/*lo primero que carga*/
	cargarSeccion(inicio);

	/*pasamos las secciones a cargar*/
	$('#inicio').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(inicio);
	});

	$('#conocenos').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(conocenos);
	});

	$('#chef').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(chef);
	});

	$('#pasteleria').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(pasteleria);
	});

	$('#barman').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(barman);
	});

	$('#eventos').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(eventos);
	});

	$('#cocteleria').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(cocteleria);
	});

	$('#minichef').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(minichef);
	});

	$('#curricula').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(curricula);
	});

	$('#servicios').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(servicios);
	});

	$('#anotar').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(anotar);
	});

	$('#contacto').on('click', function(event){
		event.preventDefault();
		$(".nav").find(".active").removeClass("active");
		$(this).addClass("active");
		cargarSeccion(contacto);
	});


// ---------------------------------------------



function getInformationByGroup(){
  event.preventDefault();
  var grupo = $("#groupid")[0].value;
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
     success: function(data){
       var html = "";
       for (var i = 0; i < data.information.length; i++) {
         html += "Id: " + data.information[i]['_id'] + "</br>";
         html += "Grupo: " + data.information[i]['group'] + "</br>";
         html += "Informacion: " + data.information[i]['thing'] + "</br>";
         html += "--------------------- </br>";
       }
       $("#infoGroup").html(html);
     }
  });
}

function getInformationByItem(){
  event.preventDefault();
  var item = $("#itemid")[0].value;
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/get/" + item,
     success: function(data){
       var html = "";
       html += "Id: " + data.information['_id'] + "</br>";
       html += "Grupo: " + data.information['group'] + "</br>";
       html += "Informacion: " + data.information['thing'] + "</br>";
       html += "--------------------- </br>";
       $("#infoItem").html(html);
     },
     error:function(data){
       console.log(data);
     }

  });
}

function guardarInformacion(){
  event.preventDefault();
  var grupo = $("#grupo")[0].value;
  var informacion = $("#informacion")[0].value;
  var info = {
      "group": grupo,
      "thing": informacion
      };

  if (grupo && informacion){
    $.ajax({
       type: "POST",
       dataType: 'JSON',
       data: JSON.stringify(info),
       contentType: "application/json; charset=utf-8",
       url: "http://web-unicen.herokuapp.com/api/create",
       success: function(data){
         $("#guardarAlert").removeClass("alert-danger")
         $("#guardarAlert").addClass("alert-success")
         $("#guardarAlert").html("Informacion guardada con ID=" + data.information._id);
         console.log(data);
       },
       error:function(data){
         $("#guardarAlert").addClass("alert-danger")
         $("#guardarAlert").html("Error por favor intente mas tarde");
         console.log(data);
       }
    });
  }
  else
  {
    $("#guardarAlert").addClass("alert-danger")
    $("#guardarAlert").html("Grupo e Informacion son campos requeridos");
  }
}


});
