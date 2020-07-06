<?php

class adminModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    }

    function getCourses(){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category;");
        $sentence->execute();
        $cuorses = $sentence->fetchAll();
        return $cuorses;
    }

    function getCourse($id_course){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category WHERE id_course=?");
        // $sentence = $this->db->prepare( "SELECT * FROM course WHERE id_course=?");
        $sentence->execute(array($id_course));
        $course = $sentence->fetch();
        return $course;
    }
    
    function getCategoriesForAddCourse(){
        $sentence = $this->db->prepare( "SELECT * FROM category");
        $sentence->execute();
        $categories = $sentence->fetchAll();
        return $categories;
    }
    
    function addCourse($course,$duration,$description,$id_category){
        $sentence = $this->db->prepare( "INSERT INTO course(course,duration,description,id_category) VALUES(?,?,?,?)");
        $sentence->execute(array($course,$duration,$description,$id_category));    
    }
    
    function removeCourse($id_course){
        $sentence = $this->db->prepare( "DELETE FROM course WHERE id_course=?");
        $sentence->execute(array($id_course));
    }      

}

?>