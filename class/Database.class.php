<?php

class Database {

    private $host = DB_HOST;
    private $user =  DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    public function __contruct(){
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        $option = array(
            PDO:: ATTR_PERSISTENT => true;
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );


        
    }
}