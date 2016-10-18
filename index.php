<?php  // 1ro - la forma de acceder al sistema
 include_once ('config/config_app.php'); //incluimos el archivo del router
 include_once ('controller/navegacion_controller.php'); //incluimos archivo del navegador

 $navegacionController = new NavegacionController();

 if(!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){    //comprobamos parametros de la URI
   $navegacionController->index(); //carga el header,nav y footer
 }
 else{
   switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_INICIO:
      $navegacionController->inicio();
      break;
    case ConfigApp::$ACTION_SOMOS:
      $navegacionController->somos();
      break;
    case ConfigApp::$ACTION_CATALOGOS:
      $navegacionController->catalogos();
      break;
    case ConfigApp::$ACTION_CATALOGO:
      $navegacionController->catalogo();
      break;
    case ConfigApp::$ACTION_NOTICIAS:
      $navegacionController->noticias();
      break;
    case ConfigApp::$ACTION_CONTACTO:
      $navegacionController->contacto();
      break;
    case ConfigApp::$ACTION_NACIONAL:
      $navegacionController->nacional();
      break;
    case ConfigApp::$ACTION_INTER:
      $navegacionController->inter();
      break;
    case ConfigApp::$ACTION_REGGAE:
      $navegacionController->reggae();
      break;
    case ConfigApp::$ACTION_COMICS:
      $navegacionController->comics();
      break;
    case ConfigApp::$ACTION_CALAVERAS:
      $navegacionController->calaveras();
      break;
    case ConfigApp::$ACTION_CAMISAS:
      $navegacionController->camisas();
      break;
    case ConfigApp::$ACTION_ACCESORIOS:
      $navegacionController->accesorios();
      break;
    case ConfigApp::$ACTION_BUSOS:
      $navegacionController->busos();
      break;
    case ConfigApp::$ACTION_MMA:
      $navegacionController->mma();
      break;
    case ConfigApp::$ACTION_INSTRUMENTOS:
      $navegacionController->instrumentos();
      break;
   }
 }

?>
