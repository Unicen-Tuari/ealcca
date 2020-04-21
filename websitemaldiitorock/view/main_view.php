<?php
require_once('libs/smarty/Smarty.class.php');

class MainView{
		protected $smarty; //PROBLEMAS CON EL PRIVATE

		function __construct(){
			$this->smarty = new Smarty;
			$this->smarty->setCompileDir('libs/smarty/templates_c'); //ES NECESARIO ESTABLECER EL DIRECTORIO DE LAS PLANTILLAS COMPILADAS
		}
	}
?>
