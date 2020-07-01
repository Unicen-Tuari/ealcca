<?php
require_once('view/userView.php');
require_once('model/adminModel.php');

class userController{
    
    private $view;
    private $model;

    function __construct(){
        $this->view = new userView();
        $this->model = new adminModel();
    }

    function login(){
        return $this->view->login();
    }

    function checkIn(){
        return $this->view->register();
    }

    function register(){

        if($_POST["email"]==""){
            return;
        }
        if($_POST["password"]==""){
            return;
        }
        $this->model->newUser($_POST["email"],$_POST["password"]);
        header("location: login");
    }

    function logIn(){
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    function logOut(){

    }
}
?>