<?php
require_once dirname(__DIR__).'/Model/User.model.php';
require_once dirname(__DIR__).'/Util/auth.util.php'; 

class AuthController{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    // Auth For Register User
    public function register($username , $firstname ,$lastname ,  $useremail, $userpassword , $confirmpassword){
        $inputFields = [$username ,$firstname ,$lastname ,  $useremail, $userpassword , $confirmpassword];
        $checkfield = isEmptyInput($inputFields);

        if($checkfield['status'] == true){
            return $checkfield;
        }

        if(!isPasswordMatch($userpassword , $confirmpassword)){
            return 'Password MisMatch';
        }
        return $this->user->register($username , $firstname ,$lastname , $useremail, $userpassword);
    }

  // Auth For Login User
    public function login($useremail , $password){
        $inputFields = [$useremail , $password];
        $checkfield = isEmptyInput($inputFields);

        try{
            if($checkfield['status'] == true){
                return $checkfield;
            }
            $result = $this->user->login($useremail , $password);   
            return $result;
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
    }

    // Auth For Logout
    public function logout(){
        session_destroy();
    }

    // Auth For Getting the User
    public function getUser($id){
        return $this->user->getUser($id);
    }

   
}