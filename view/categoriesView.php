<?php
require_once('libs/Smarty.class.php');

class categoriesView{

    private $Smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function categories($categories){                          
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/categories.tpl');                                          
    }

    function showCategory($infoCategory){
        $this->smarty->assign('infoCategory',$infoCategory);
        $this->smarty->display('templates/category.tpl');
    }    
}
?>