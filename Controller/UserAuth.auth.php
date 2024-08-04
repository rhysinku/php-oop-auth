<?php
require_once dirname(__DIR__).'/Model/User.model.php';


class AuthController{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function register($username , $useremail, $userpassword , $confirmpassword){

        if(!$this->isPasswordMatch($userpassword , $confirmpassword)){
            return 'Password MisMatch';
        }
        return $this->user->register($username , $useremail, $userpassword);
    }



    private function isPasswordMatch($userpassword , $userconfirmpassword){

        if($userpassword != $userconfirmpassword){
            return false;
        }
        return true;
    }
}