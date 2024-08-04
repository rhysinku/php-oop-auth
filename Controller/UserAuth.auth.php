<?php
require_once dirname(__DIR__).'/Model/User.model.php';
require_once dirname(__DIR__).'/Util/auth.util.php'; 

class AuthController{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function register($username , $useremail, $userpassword , $confirmpassword){
        $inputFields = [$username , $useremail, $userpassword , $confirmpassword];
        $checkfield = isEmptyInput($inputFields);

        if($checkfield['status'] == true){
            return $checkfield;
        }

        if(isPasswordMatch($userpassword , $confirmpassword)){
            return 'Password MisMatch';
        }
        return $this->user->register($username , $useremail, $userpassword);
    }


    public function login($useremail , $password){
        $inputFields = [$useremail , $password];
        $checkfield = isEmptyInput($inputFields);

        if($checkfield['status'] == true){
            return $checkfield;
        }
        return $this->user->login($useremail , $password);
        
        
    }


   
}