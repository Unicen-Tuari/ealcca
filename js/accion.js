
/*declaramos las seciones que tenemos*/
$('document').ready(function(){
  inicio = 'inicio';
  somos = 'somos';
  noticias = 'noticias';
  contacto = 'contacto';
  nacional = 'nacional';
  inter = 'inter';
  reggae = 'reggae';
  comics = 'comics';
  calaveras = 'calaveras';
  camisas = 'camisas';
  accesorios = 'accesorios';
  busos = 'busos';
  mma = 'mma';
  instrumentos ='instrumentos';

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

  $('#somos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(somos);
  });

  $('#noticias').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(noticias);
  });

  $('#contacto').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(contacto);
  });

  $('#nacional').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(nacional);
  });

  $('#inter').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(inter);
  });

  $('#reggae').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(reggae);
  });

  $('#comics').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(comics);
  });

  $('#calaveras').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(calaveras);
  });

  $('#camisas').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(camisas);
  });

  $('#accesorios').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(accesorios);
  });

  $('#busos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(busos);
  });

  $('#mma').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(mma);
  });

  $('#instrumentos').on('click', function(event){
    event.preventDefault();
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    cargarSeccion(instrumentos);
  });

});



