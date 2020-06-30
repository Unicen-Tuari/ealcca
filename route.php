<?php

require_once 'config/ConfigApp.php';
require_once 'model/adminModel.php';
require_once 'view/coursesView.php';
require_once 'controller/coursesController.php';
require_once 'view/categoriesView.php';
require_once 'controller/categoriesController.php';
require_once 'view/generalView.php';
require_once 'controller/generalController.php';


function parceURL($url){
  $urlExploded = explode("/",$url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

$urlData = parceURL($_GET[ConfigApp::$ACTION]); //parsea la url para identificar uno del otro
$actionName = $urlData[ConfigApp::$ACTION]; //nombre de la accion a ejecutar
        
if (array_key_exists($actionName,ConfigApp::$ACTIONS)) {
  $params = $urlData[ConfigApp::$PARAMS];

  $controllerMetodo = explode('#',ConfigApp::$ACTIONS[$actionName]); //nombre del controller
  $controller = new $controllerMetodo[0]; //controller
  $methodName = $controllerMetodo[1]; //metodo

  if (isset($params) && $params != null) {
    echo $controller->$methodName($params);
  }else{
    echo $controller->$methodName();
  }
}else{
  echo $controller->home();  
}

?>