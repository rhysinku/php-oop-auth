<?php 

require_once dirname(__DIR__).'/Database/Database.class.php';   

class User extends Database {

    public function __construct(){
        $this->connect();
    }
    
protected function  setUser ($username , $useremail , $userpassword){
    $stmt = "INSERT INTO users ";
}
    
}