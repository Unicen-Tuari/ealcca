<?php

require_once('view/categoriesView.php');
require_once('model/adminModel.php');

class categoriesController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new categoriesView();
        $this->model = new adminModel();

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

    function categories(){                          
        $categories = $this->model->getCategories();    
        $this->view->categories($categories);                                 
    }

    function showCategory($params){
        $infoCategory = $this->model->getCategory($params[0]);
        $this->view->showCategory($infoCategory);
    }

    function insertCategory(){
        $this->model->addCategory($_GET["name"]);
        header("location: categories");
    }
    
    function deleteCategory($params){
        $this->model->removeCategory($params[0]);
        header("location: ../categories");
    }
    
}

?>