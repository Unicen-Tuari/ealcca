<?php

require_once('pdo/database.php');
require_once('libs/Smarty.class.php');

function courses(){
    $categories = getCategory();       
    $courses = getCourses();
    $smarty = new Smarty();
    $smarty->assign('categories',$categories);
    $smarty->assign('courses',$courses);
    $smarty->display('templates/admin.tpl');
}

function showCourse($params){    
    $infoCourse = getCourse($params[0]);
    $smarty = new Smarty();
    $smarty->assign('infoCourse',$infoCourse);
    $smarty->display('templates/course.tpl');
}

function insertCourse(){
    addCourse($_GET["course"],$_GET["duration"],$_GET["description"],$_GET["id_category"]);
    header("location: admin");
    // echo "salio?";
    //print_r($_GET);
    // echo $_GET["id_category"];
}

function deleteCourse($params){
    removeCourse($params[0]);
    header("location: ../admin");
}

?>