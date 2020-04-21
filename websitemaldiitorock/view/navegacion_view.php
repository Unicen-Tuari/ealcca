<?php
require_once('main_view.php');

class NavegacionView extends MainView{

  function showIndex(){
    $this->smarty->display('index.tpl');
  }

  function showInicio(){
    $this->smarty->display('inicio.tpl');
  }

  function showSomos(){
    $this->smarty->display('somos.tpl');
  }

  function showCatalogos(){
    $this->smarty->display('catalogos.tpl');
  }

  function showCatalogo(){
    $this->smarty->display('catalogo.tpl');
  }

  function showNoticias(){
    $this->smarty->display('noticias.tpl');
  }

  function showContacto(){
    $this->smarty->display('contacto.tpl');
  }

  function showNacional(){
    $this->smarty->display('nacional.tpl');
  }

  function showinter(){
    $this->smarty->display('inter.tpl');
  }

  function showReggae(){
    $this->smarty->display('reggae.tpl');
  }

  function showComics(){
    $this->smarty->display('comics.tpl');
  }

  function showCalaveras(){
    $this->smarty->display('calaveras.tpl');
  }

  function showCamisas(){
    $this->smarty->display('camisas.tpl');
  }

  function showAccesorios(){
    $this->smarty->display('accesorios.tpl');
  }

  function showBusos(){
    $this->smarty->display('busos.tpl');
  }

  function showMma(){
    $this->smarty->display('mma.tpl');
  }

  function showInstrumentos(){
    $this->smarty->display('instrumentos.tpl');
  }

}

 ?>
