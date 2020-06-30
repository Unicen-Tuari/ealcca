<?php
require_once('libs/Smarty.class.php');

class coursesView{

    private $Smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function courses($courses){
        //$this->smarty->assign('categories',$categories);
        $this->smarty->assign('courses',$courses);
        $this->smarty->display('templates/admin.tpl');
    }

    function showCourse($infoCourse){    
        $this->smarty->assign('infoCourse',$infoCourse);
        $this->smarty->display('templates/course.tpl');
    }
}
?>