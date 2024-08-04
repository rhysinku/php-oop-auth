<?php
require_once dirname(__DIR__).'/Model/User.model.php';


class AuthController{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function register($username , $useremail, $userpassword){
        return $this->user->register($username , $useremail, $userpassword);
    }
}