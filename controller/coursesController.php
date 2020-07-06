<?php

require_once('view/coursesView.php');
require_once('model/coursesModel.php');

class coursesController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new coursesView();
        $this->model = new coursesModel();
        
        session_start();        
        
        if(!isset($_SESSION["name"])){
            header("location:login");
            die();
        }else{
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 100)){
                header("location:logOut");
                die();
            }
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function courses(){
        $categories = $this->model->getCategoriesForAddCourse();    
        $courses = $this->model->getCourses();
        $this->view->courses($categories,$courses);
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