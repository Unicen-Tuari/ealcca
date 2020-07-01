<?php
require_once('libs/Smarty.class.php');

class userView{

    private $smarty;
    private $base_url;

    function __construct(){
        $this->smarty = new Smarty;
        $this->base_url = '';
    }

    function login(){
        $this->smarty->assign('base_url',$this->base_url);
        return $this->smarty->display('templates/login.tpl');
    }

    function checkIn(){
        $this->smarty->assign('base_url',$this->base_url);
        return $this->smarty->display('templates/checkIn.tpl');
    }
}

?>