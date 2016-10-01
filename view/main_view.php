<?php
require_once('libs/smarty/Smarty.class.php');

class MainView{
		protected $smarty;

		function __construct(){
			$this->smarty = new Smarty;
			$this->smarty->setCompileDir('libs/smarty/templates_c');
		}
	}
 ?>
