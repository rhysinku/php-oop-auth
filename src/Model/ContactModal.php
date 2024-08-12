<?php 

namespace Modal;
use Database\Database;

use PDO;
use PDOException;

class ContactModel extends Database {
    

    public function __construct(){
        $this->connect();
    }

    public function getAllContacts(){
        $sql = "SELECT * FROM contacts";
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUserContact($userId){
        $sql = "SELECT * FROM from contacts WHERE userID = ?";
        $stmt = $this->dbh->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);  
    }

    public function addContact($userId, $firtname , $lastname , $email, $phone){
        $sql = "INSERT INTO contacts (userID, firstname , lastname , email , phone) VALUES (? , ?, ?, ?, ?)";
        $stmt = $this->dbh->prepare($sql);

        try{
            return $stmt->execute(array($userId, $firtname , $lastname , $email, $phone));
        }catch(PDOException $e){
            echo "". $e->getMessage();
        }
    }

} 