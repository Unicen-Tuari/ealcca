<?php

class categoriesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_cute24-7;charset=utf8','root','root');
    }

    function getCategories(){
        $sentence = $this->db->prepare( "SELECT * FROM category");
        $sentence->execute();
        $categories = $sentence->fetchAll();
        return $categories;
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