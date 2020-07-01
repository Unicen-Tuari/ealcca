<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');


    class ConfigApp
    {
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
            '' => 'generalController#home',
            'home' => 'generalController#home',
            'staff' => 'generalController#staff',
            'extensiones' => 'generalController#extensiones',            
            'makeup' => 'generalController#makeup',
            'cursos' => 'generalController#cursos',
            'contacto' => 'generalController#contacto',             
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
            'logIn' => 'userController#logIn',
            'logOut' => 'userController#logOut'
                
        ];
    }
?>