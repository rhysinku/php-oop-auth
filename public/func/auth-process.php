<?php 


use Util\StatusMessage;
// use Controllers\AuthController;
// $auth = new AuthController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $statusMessage = '';

$action = $_POST['action'];
    switch($action){

        case 'updateUser':

           $password = $_POST['password'];
           $confirmpassword = $_POST['confirmpassword'];
            if($password === $confirmpassword){

             $matchPassword = $password;
             $data = [
                'username' => $_POST['username'],
                "firstname" => $_POST['firstname'],
                "lastname" => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $matchPassword,
               ];

               ['username' => $username] = $data;
               echo $username;

            }else{
                $statusMessage = new StatusMessage('error', 'Check Your Password');
            }
            break;
        
        default:
            $statusMessage = new StatusMessage('error', 'No Form Connected');
            break;
    }
}