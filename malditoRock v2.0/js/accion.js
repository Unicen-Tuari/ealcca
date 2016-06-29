"use estrict"

$('document').ready(function(){
  inicio = 'inicio';

  function cargarSeccion(seccion){
    $ajax({
      type: 'GET',
      datatype: 'HTML',
      url:seccion+'.html',
      success: function(data){
        $('#contenedor-principal').html(data);
      },
      error: function(){
        alert('no se pudo cargar la pagina'+seccion);
      }
    });
  };

  cargarSeccion(inicio);












function initialize()
{
  var mapProp = {
    center: new google.maps.LatLng(-37.312121904145606,-59.14408206939697),
    zoom:15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function loadScript()
{
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;
