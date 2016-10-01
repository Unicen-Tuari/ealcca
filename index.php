<?php
 include_once ('config/router_config.php'); //incluimos el archivo del router
 include_once ('controller/navegacion_controller.php'); //incluimos archivo del navegador

 $navegacionController = new NavegacionController();

 if(!array_key_exists(RouterConfig::$ACTION,$_REQUEST)){
   $navegacionController->index(); //carga el header,nav y footer
 }
 else{
   switch ($_REQUEST[RouterConfig::$ACTION]) {
    case RouterConfig::$ACTION_INICIO:
      $navegacionController->inicio(); //cargamos la section de inicio
      break;
    case RouterConfig::$ACTION_SOMOS:
      $navegacionController->somos(); //cargamos la section de somos
      break;
    case RouterConfig::$ACTION_NOTICIAS:
      $navegacionController->noticias(); //cargamos la section de somos
      break;
    case RouterConfig::$ACTION_CONTACTO:
      $navegacionController->contacto(); //cargamos la section de somos
      break;
    case RouterConfig::$ACTION_NACIONAL:
      $navegacionController->nacional();
      break;
    case RouterConfig::$ACTION_INTER:
      $navegacionController->inter();
      break;
    case RouterConfig::$ACTION_REGGAE:
      $navegacionController->reggae();
      break;
    case RouterConfig::$ACTION_COMICS:
      $navegacionController->comics();
      break;
    case RouterConfig::$ACTION_CALAVERAS:
      $navegacionController->calaveras();
      break;
    case RouterConfig::$ACTION_CAMISAS:
      $navegacionController->camisas();
      break;
    case RouterConfig::$ACTION_ACCESORIOS:
      $navegacionController->accesorios();
      break;
    case RouterConfig::$ACTION_BUSOS:
      $navegacionController->busos();
      break;
    case RouterConfig::$ACTION_MMA:
      $navegacionController->mma();
      break;
    case RouterConfig::$ACTION_INSTRUMENTOS:
      $navegacionController->instrumentos();
      break;
   }
 }


?>
