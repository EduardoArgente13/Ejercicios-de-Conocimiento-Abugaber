<?php
require_once 'db.php';

class User {
    private $db;

    function __construct(){
        global $conn;
        $this->db = $conn;
    }

    function checkLogin($username, $password){
        $username = $this->db->real_escape_string($username);
        $password = $this->db->real_escape_string($password);
        $query = "SELECT * FROM users WHERE username = ".$username." AND password = ".$password."'";
        $result = $this->db->query($query);
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            return $user;
        }else{
            return false;
        }
    }
    
}
?>

