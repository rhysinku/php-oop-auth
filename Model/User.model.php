<?php 

require_once dirname(__DIR__).'/Database/Database.class.php';   
class User extends Database {

    public function __construct(){
        $this->connect();
    }


 
    
    public function  register ($username , $useremail , $userpassword){
    $sql = "INSERT INTO user (username, email, password) VALUES (? , ? , ?) ";
    $stmt = $this->dbh->prepare($sql);
    $hashPassowrd = password_hash($userpassword , PASSWORD_BCRYPT);

    try {
        //code...
        $isEmailExist = $this->isEmailExist($useremail);
         if($isEmailExist){
            return  $isEmailExist;
         }

        return $stmt->execute(array($username , $useremail , $hashPassowrd));
        
    } catch (PDOException $e) {
       var_dump($e);
    }
    
}

public function login ($useremail , $userpassword){
    $sql = "SELECT * FROM user where username = ?";
    $stmt = $this->dbh->prepare($sql); 
    $stmt->execute(array($useremail));
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user && password_verify($userpassword , $user->password)){
        $_SESSION['user_id'] = $user->id;
        return "Login Success";
    }

    return "User Not Found"; 
    
}



private function isEmailExist($useremail){
    
    $sql = "SELECT email FROM user WHERE email = ? ";
    $stmt = $this->dbh->prepare($sql);
    $stmt->execute(array($useremail));
    $result = $stmt->fetch(PDO::FETCH_OBJ);

    return $result;

}





    
}