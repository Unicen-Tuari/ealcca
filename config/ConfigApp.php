<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');


    class ConfigApp
    {
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
            '' => 'home',
            'home' => 'home',
            'staff' => 'staff',            
            'makeup' => 'makeup',
            'cursos' => 'cursos',
            'contacto' => 'contacto',            
            'extensiones' => 'extensiones',
            'admin' => 'coursesController#courses',
            'categories' => 'categoriesController#categories',
            'insertCourse' => 'coursesController#insertCourse',
            'deleteCourse' => 'coursesController#deleteCourse',
            'showCourse' => 'coursesController#showCourse',
            'showCategory' => 'categoriesController#showCategory',
            'insertCategory' => 'categoriesController#insertCategory',
            'deleteCategory' => 'categoriesController#deleteCategory'
                
        ];
    }
?>