<?php 

namespace Model;

use Database\Database;
use PDOException;
use PDO;


class UserModel extends Database {

    public function __construct(){
        $this->connect();
    }

    
    public function  register ($username ,$firstname ,$lastname , $useremail , $userpassword){
    $sql = "INSERT INTO users (username, firstname , lastname , email, password) VALUES (? , ? , ? , ? , ?) ";
    $stmt = $this->dbh->prepare($sql);
    $hashPassowrd = password_hash($userpassword , PASSWORD_BCRYPT);

    try {
        //code...
        $isEmailExist = $this->isEmailExist($useremail);
         if($isEmailExist){
            return  $isEmailExist;
         }

        return $stmt->execute(array($username , $firstname ,$lastname , $useremail , $hashPassowrd));
        
    } catch (PDOException $e) {
       var_dump($e);
    }
    
}

public function login ($useremail , $userpassword){
    $sql = "SELECT * FROM users where email = ?";
    $stmt = $this->dbh->prepare($sql); 
    $stmt->execute([$useremail]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user && password_verify($userpassword, $user->password)){

        $_SESSION['user_id'] = $user->id;
        return  true;
       
    }
        return false;  
}

public function updateUser ($username ,$firstname ,$lastname , $useremail , $userpassword = null){


    if($userpassword){
        $hashPassword = password_hash($userpassword , PASSWORD_BCRYPT);
        $sql = "UPDATE users SET username = ? , firstname = ? , lastname = ?, email = ? , password = ?  WHERE id = ?";
        $stmt = $this->dbh->prepare($sql);
        return $stmt->execute([$username ,$firstname ,$lastname , $useremail , $hashPassword ]);
    }else{
        $sql = "UPDATE users SET username = ? , firstname = ?, lastname = ? , email = ? WHERE id = ?";
        $stmt = $this->dbh->prepare($sql);
        return $stmt->execute([$username ,$firstname ,$lastname , $useremail , ]);
    }
}





public function getUser($id) {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->dbh->prepare($sql); 
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}



private function isEmailExist($useremail){
    
    $sql = "SELECT email FROM users WHERE email = ? ";
    $stmt = $this->dbh->prepare($sql);
    $stmt->execute(array($useremail));
    $result = $stmt->fetch(PDO::FETCH_OBJ);

    return $result;

}

 
}