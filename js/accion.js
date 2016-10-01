$('document').ready(function(){   //se ejecuta cuando el DOM se a cargado completamente

  function cargarSeccion(seccion){
    $.ajax({       // se pasa la direccion url de la pagina
      type: 'GET',        // metodo
      dataType: 'HTML',   // tipo de dato que espero recibir (XML,JSON,HTML,ETC)
      url:'index.php?action=' + seccion,
      success: function(data){      // funcion que se ejecuta cuando el request fue exitoso
            $('#contenedor-principal').html(data);
          },
      error: function(){        // funcion cuando el request da error
            alert('No se puede cargar la pagina ' + seccion);
          }
    });
  };

  /*lo primero que carga*/
  cargarSeccion('inicio');

  /* pasamos las secciones a cargar */
  $('#inicio').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('inicio');
  });

  $('#somos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('somos');
  });

  $('#noticias').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('noticias');
  });

  $('#contacto').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('contacto');
  });

  $('#nacional').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('nacional');
  });

  $('#inter').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('inter');
  });

  $('#reggae').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('reggae');
  });

  $('#comics').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('comics');
  });

  $('#calaveras').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('calaveras');
  });

  $('#camisas').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('camisas');
  });

  $('#accesorios').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('accesorios');
  });

  $('#busos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('busos');
  });

  $('#mma').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('mma');
  });

  $('#instrumentos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion('instrumentos');
  });

});
