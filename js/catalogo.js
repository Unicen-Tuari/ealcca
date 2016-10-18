$('document').ready(function(){

  function cargarCatalogo(seccion){
    $.ajax({       // se pasa la direccion url de la pagina
      type: 'GET',        // metodo
      dataType: 'HTML',   // tipo de dato que espero recibir (XML,JSON,HTML,ETC)
      url:'index.php?action=' + seccion,
      success: function(data){      // funcion que se ejecuta cuando el request fue exitoso
            $('#contenedor-catalogo').html(data);
          },
      error: function(){        // funcion cuando el request da error
            alert('No se puede cargar la pagina ' + seccion);
          }
    });
  };

  cargarCatalogo('');

  $('#nacional').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('nacional');
  });

  $('#inter').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('inter');
  });

  $('#reggae').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('reggae');
  });

  $('#comics').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('comics');
  });

  $('#calaveras').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('calaveras');
  });

  $('#camisas').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('camisas');
  });

  $('#accesorios').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('accesorios');
  });

  $('#busos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('busos');
  });

  $('#mma').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('mma');
  });

  $('#instrumentos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('instrumentos');
  });


});
