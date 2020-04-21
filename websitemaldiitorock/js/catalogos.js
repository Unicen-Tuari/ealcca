$('document').ready(function(){
  function cargarCatalogo(seccion){
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

  $('#nacional').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#inter').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#reggae').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#comics').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#calaveras').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#camisas').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#accesorios').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#busos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#mma').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

  $('#instrumentos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarCatalogo('catalogo');
  });

});
