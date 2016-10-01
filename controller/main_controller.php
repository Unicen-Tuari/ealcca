<?php
require_once('view/navegacion_view.php');

class MainController{
  protected $navegacionView;

  function __construct(){
    $this->navegacionView = new NavegacionView();
  }
}

 ?>
