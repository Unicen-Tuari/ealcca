<?php

require_once('view/coursesView.php');
require_once('model/coursesModel.php');

class coursesController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new coursesView();
        $this->model = new coursesModel();

    }

    function courses(){
        //$categories = $this->model->getCategories();
        //$this->view->courses($categories);    
        $courses = $this->model->getCourses();
        $this->view->courses($courses);
    }

    function showCourse($params){    
        $infoCourse = $this->model->getCourse($params[0]);
        $this->view->showCourse($infoCourse);
    }

    function insertCourse(){
        $this->model->addCourse($_GET["course"],$_GET["duration"],$_GET["description"],$_GET["id_category"]);
        header("location: admin");
    }
    
    function deleteCourse($params){
        $this->model->removeCourse($params[0]);
        header("location: ../admin");
    }

}

?>