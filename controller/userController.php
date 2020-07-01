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
        return $this->view->checkIn();
    }

    function register(){

        if($_POST["email"]==""){
            return;
        }
        if($_POST["password"]==""){
            return;
        }
        if($_POST["is_admin"]==""){
            return;
        }
        $this->model->newUser($_POST["email"],$_POST["password"],$_POST["is_admin"]);
        header("location: login");
    }

    function goIn(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $this->model->getUser($email);
        $hash = $user["password"];
        if (password_verify($password, $hash)){
            session_start();
            $_SESSION["name"] = $user["email"];
            header("location: admin");
        }            
        else
            header("location: login");
    }

    function logOut(){

    }
}
?>