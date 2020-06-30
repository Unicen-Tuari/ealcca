<?php
require_once('libs/Smarty.class.php');

class generalView{

    private $Smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function home(){
        $this->smarty->display('templates/index.tpl');
    }

    function staff(){
        $this->smarty->display('templates/staff.tpl');
    }

    function extensiones(){
        $this->smarty->display('templates/extensiones.tpl');    
    }

    function makeup(){
        $this->smarty->display('templates/makeup.tpl');
    }

    function cursos($courses){
        $this->smarty->assign('courses',$courses);
        $this->smarty->display('templates/cursos.tpl');
    }

    function contacto(){
        $this->smarty->display('templates/contacto.tpl');      
    }



}


?>