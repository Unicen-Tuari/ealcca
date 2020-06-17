<?php
define('ACTION',0);
define('VALOR1',1);
require_once 'config/ConfigApp.php';
require_once 'index.php';
require_once 'staff.php';
require_once 'extensiones.php';
require_once 'makeup.php';
require_once 'cursos.php';
require_once 'contacto.php';
require_once 'admin/index.php';
//require_once 'admin/categorias.php';

function parseURL($url){
    $urlExploded = explode('/',$url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;
    return $arrayReturn;
}

if ((isset($_GET['action']))){
    $urlData = parseURL($_GET[ConfigApp::$ACTION]);
    $actionName = $urlData[ConfigApp::$ACTION];
    if (array_key_exists($actionName,ConfigApp::$ACTIONS)) {
      $params = $urlData[ConfigApp::$PARAMS];
      $metodo = ConfigApp::$ACTIONS[$actionName];
      if (isset($params) && $params != null) {
        echo $metodo($params);
      }
      else {
        echo $metodo();
      }
    }
  }

?>