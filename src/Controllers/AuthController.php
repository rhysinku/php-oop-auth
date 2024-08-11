<?php

namespace Controllers;

use Model\UserModel;
use Util\Validation;
use Util\StatusMessage;
use PDOException;

class AuthController{
    private $user;

    public function __construct(){
        $this->user = new UserModel();
    }

    // Auth For Register User
    public function register($username , $firstname ,$lastname ,  $useremail, $userpassword , $confirmpassword){
        $inputFields = [$username ,$firstname ,$lastname ,  $useremail, $userpassword , $confirmpassword];
        $checkfield = Validation::isEmptyInput($inputFields);

        if($checkfield['status'] == true){
            return new StatusMessage('error' , 'Please fill in all fields');
        }

        if(!Validation::isPasswordMatch($userpassword , $confirmpassword)){
            return new StatusMessage('error' ,'Password MisMatch');
        }
         $registrationSuccess = $this->user->register($username , $firstname ,$lastname , $useremail, $userpassword);

         if($registrationSuccess){
            return new StatusMessage('success','Register Succesfully');
         }else{
            return new StatusMessage('error','Register Failed');
         }
        
    }

  // Auth For Login User
    public function login($useremail , $password){
        $inputFields = [$useremail , $password];
        $checkfield = Validation::isEmptyInput($inputFields);

        try{
            if($checkfield['status'] == true){
                return new StatusMessage('error' , 'Please fill in all fields');
            }
           if($this->user->login($useremail , $password)){
            return new StatusMessage('ok','User Logged in succesfully');
           }else{
            return new StatusMessage('error','Invalid Email or Password');
           }
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
    }

    // Auth For Update User
    public function updateUser($userId , $username, $firstname , $lastname , $email, $password){
       $result =  $this->user->updateUser($userId , $username, $firstname , $lastname , $email, $password);
         return $result;
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