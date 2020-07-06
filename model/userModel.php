<?php

class userModel{

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
}

?>