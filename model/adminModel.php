<?php

class adminModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    }

    function newUser($email,$password,$is_admin){
        $sentence = $this->db->prepare("INSERT INTO user(email,password,is_admin) VALUES (?,?,?)");
        $sentence->execute(array($email,password_hash($password, PASSWORD_DEFAULT),$is_admin));
    }

    function getUser($email){
        $sentence = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $sentence->execute(array($email));
        $user = $sentence->fetch();
        return $user;
    }

    function getCourses(){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category;");
        $sentence->execute();
        $cuorses = $sentence->fetchAll();
        return $cuorses;
    }
    
    function getCategories(){
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
    
    function getCourse($id_course){
        $sentence = $this->db->prepare( "SELECT id_course, course, description, duration, name FROM course INNER JOIN category ON course.id_category = category.id_category WHERE id_course=?");

        // $sentence = $this->db->prepare( "SELECT * FROM course WHERE id_course=?");
        $sentence->execute(array($id_course));
        $course = $sentence->fetch();
        return $course;
    }
    
    function getCategory($id_category){
        $sentence = $this->db->prepare( "SELECT * FROM category WHERE id_category=?");
        $sentence->execute(array($id_category));
        $category = $sentence->fetch();
        return $category;
    }
    
    function addCategory($name){
        $sentence = $this->db->prepare( "INSERT INTO category(name) VALUES(?)");
        $sentence->execute(array($name));    
    }
    
    function removeCategory($id_category){
        $sentence = $this->db->prepare( "DELETE FROM category WHERE id_category=?");
        $sentence->execute(array($id_category));
    }
}

?>