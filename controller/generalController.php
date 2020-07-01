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
        $categories = $this->model->getCategories();
        $this->view->staff($categories);
    }

    function extensiones(){
        $categories = $this->model->getCategories();
        $this->view->extensiones($categories);
    }

    function makeup(){
        $categories = $this->model->getCategories();
        $this->view->makeup($categories);
    }

    function cursos(){
        $categories = $this->model->getCategories();
        $courses = $this->model->getCourses();
        $this->view->cursos($categories,$courses);
    }

    function contacto(){
        $categories = $this->model->getCategories();
        $this->view->contacto($categories);
    }

}


?>