<?php

class mainModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    }
    
    function getCategoriesForNav(){
        $sentence = $this->db->prepare( "SELECT * FROM category");
        $sentence->execute();
        $categories = $sentence->fetchAll();
        return $categories;
    }   

    function getCoursesAll(){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category");
        $sentence->execute();
        $cuorses = $sentence->fetchAll();
        return $cuorses;
    }

    function getCoursesByCategory($id_category){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category WHERE course.id_category=?");
        $sentence->execute(array($id_category));
        $cuorses = $sentence->fetchAll();
        return $cuorses;
    }

    function getCategoryForTitle($id_category){
        $sentence = $this->db->prepare( "SELECT * FROM category WHERE id_category=?");
        $sentence->execute(array($id_category));
        $category = $sentence->fetch();
        return $category;
    }
}

?>