<?php

require_once('view/generalView.php');
require_once('model/adminModel.php');

class generalController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new generalView();
        $this->model = new adminModel();
    }

    function home(){           
        $this->view->home();                                 
    }

    function staff(){
        $this->view->staff();
    }

    function extensiones(){
        $this->view->extensiones();
    }

    function makeup(){
        $this->view->makeup();
    }

    function cursos(){
        $courses = $this->model->getCourses();
        $this->view->cursos($courses);
    }

    function contacto(){
        $this->view->contacto();
    }

}


?>