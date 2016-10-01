<?php
include_once('main_controller.php');

class NavegacionController extends MainController{

  function index(){ //carga el head,nav y footer
    $this->navegacionView->showIndex();
  }

  function inicio(){
    $this->navegacionView->showInicio();
  }

  function somos(){
    $this->navegacionView->showSomos();
  }

  function noticias(){
    $this->navegacionView->showNoticias();
  }

  function contacto(){
    $this->navegacionView->showContacto();
  }

  function nacional(){
    $this->navegacionView->showNacional();
  }

  function inter(){
    $this->navegacionView->showinter();
  }

  function reggae(){
    $this->navegacionView->showReggae();
  }

  function comics(){
    $this->navegacionView->showComics();
  }

  function calaveras(){
    $this->navegacionView->showCalaveras();
  }

  function camisas(){
    $this->navegacionView->showCamisas();
  }

  function accesorios(){
    $this->navegacionView->showAccesorios();
  }

  function busos(){
    $this->navegacionView->showBusos();
  }

  function mma(){
    $this->navegacionView->showMma();
  }

  function instrumentos(){
    $this->navegacionView->showInstrumentos();
  }

}

 ?>
