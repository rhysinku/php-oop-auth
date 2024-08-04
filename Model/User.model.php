<?php 

require_once dirname(__DIR__).'/Database/Database.class.php';   

class User extends Database {

    public function __construct(){
        $this->connect();
    }
    
public function  Register ($username , $useremail , $userpassword){
    $sql = "INSERT INTO user (username, email, password) VALUES (? , ? , ?) ";
    $stmt = $this->dbh->prepare($sql);
    $hashPassowrd = password_hash($userpassword , PASSWORD_BCRYPT);

    try {
        //code...
        return $stmt->execute(array($username , $useremail , $hashPassowrd));
        
    } catch (PDOException $e) {
       var_dump($e);
    }
    
}



private function isEmailExist($useremail){
    
    $sql = "SELECT email FROM user WHERE email = ? ";
    

}
    
}