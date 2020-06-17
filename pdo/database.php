<?php

function getCourses(){
    $db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    $sentence = $db->prepare( "SELECT id_course, course, description, name FROM course INNER JOIN category ON course.id_category = category.id_category;");
    $sentence->execute();
    $cuorses = $sentence->fetchAll();
    return $cuorses;

}


?>