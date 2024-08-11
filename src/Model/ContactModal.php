<?php 

namespace Modal;
use Database\Database;

use PDO;

class ContactModel extends Database {
    

    public function __construct(){
        $this->connect();
    }

    public function getAllContacts(){
        $sql = "SELECT * FROM contacts";
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        

    }

} 