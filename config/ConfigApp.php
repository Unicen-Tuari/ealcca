<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');


    class ConfigApp
    {
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
            '' => 'mainController#home',
            'home' => 'mainController#home',
            'staff' => 'mainController#staff',
            'extensiones' => 'mainController#extensiones',            
            'makeup' => 'mainController#makeup',
            'cursos' => 'mainController#cursos',
            'contacto' => 'mainController#contacto',             
            'admin' => 'coursesController#courses',
            'categories' => 'categoriesController#categories',
            'insertCourse' => 'coursesController#insertCourse',
            'deleteCourse' => 'coursesController#deleteCourse',
            'showCourse' => 'coursesController#showCourse',
            'showCategory' => 'categoriesController#showCategory',
            'insertCategory' => 'categoriesController#insertCategory',
            'deleteCategory' => 'categoriesController#deleteCategory',
            'login' => 'userController#login',
            'checkIn' => 'userController#checkIn',
            'register' => 'userController#register',
            'goIn' => 'userController#goIn',
            'logOut' => 'userController#logOut'
                
        ];
    }
?>