<?php

function getCourses(){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT id_course, course, description, name FROM course INNER JOIN category ON course.id_category = category.id_category;");
    $sentence->execute();
    $cuorses = $sentence->fetchAll();
    return $cuorses;
}

function getCategories(){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT * FROM category");
    $sentence->execute();
    $categories = $sentence->fetchAll();
    return $categories;
}

function addCourse($course,$duration,$description,$id_category){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "INSERT INTO course(course,duration,description,id_category) VALUES(?,?,?,?)");
    $sentence->execute(array($course,$duration,$description,$id_category));    
}

function removeCourse($id_course){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "DELETE FROM course WHERE id_course=?");
    $sentence->execute(array($id_course));
}

function getCourse($id_course){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT * FROM course WHERE id_course=?");
    $sentence->execute(array($id_course));
    $course = $sentence->fetch();
    return $course;
}

function getCategory($id_category){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT * FROM category WHERE id_category=?");
    $sentence->execute(array($id_category));
    $category = $sentence->fetch();
    return $category;
}

function addCategory($name){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "INSERT INTO category(name) VALUES(?)");
    $sentence->execute(array($name));    
}

function removeCategory($id_category){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "DELETE FROM category WHERE id_category=?");
    $sentence->execute(array($id_category));
}

?>