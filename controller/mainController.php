<?php

require_once('view/mainView.php');
require_once('model/mainModel.php');

class mainController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new mainView();
        $this->model = new mainModel();
    }

    function home(){        
        $categories = $this->model->getCategoriesForNav();   
        $this->view->home($categories);                                 
    }

    function staff(){
        $categories = $this->model->getCategoriesForNav();
        $this->view->staff($categories);
    }

    function extensiones(){
        $categories = $this->model->getCategoriesForNav();
        $this->view->extensiones($categories);
    }

    function makeup(){
        $categories = $this->model->getCategoriesForNav();
        $this->view->makeup($categories);
    }

    function cursos(){
        $categories = $this->model->getCategoriesForNav();
        $courses = $this->model->getCoursesForPage();
        $this->view->cursos($categories,$courses);
    }

    function contacto(){
        $categories = $this->model->getCategoriesForNav();
        $this->view->contacto($categories);
    }

}


?>