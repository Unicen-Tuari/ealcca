<?php

function getCourses(){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT id_course, course, description, name FROM course INNER JOIN category ON course.id_category = category.id_category;");
    $sentence->execute();
    $cuorses = $sentence->fetchAll();
    return $cuorses;
}

function getCategory(){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT name FROM category");
    $sentence->execute();
    $categories = $sentence->fetchAll();
    return $categories;
}

function addCourse($course,$duration,$description,$id_category){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "INSERT INTO COURSE(course,duration,description,id_category) VALUE(?,?,?,?)");
    $sentence->execute(array($course,$duration,$description,$id_category));
    
}

?>