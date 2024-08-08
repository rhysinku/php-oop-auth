<?php
namespace Database;
use PDO;
use PDOException;
class Database {

    private $host = "localhost";
    private $user =  "root";
    private $pass = "";
    private $dbname = "oop-auth";
    protected $dbh;

    protected function connect(){
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
           $this->dbh = new PDO($dns, $this->user, $this->pass, $options);
                    
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    // public function query($sql){
    //     $this->stmt = $this->dbh->prepare($sql);
    // }
   
        
}