<?php 
require_once __DIR__ . '/../../autoload.php';

use Util\StatusMessage;
use Controllers\AuthController;
$auth = new AuthController();
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST["profileEdit"])){
   $userId = $_SESSION['user_id'];
   $username = $_POST['username'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmpassword = $_POST['confirmpassword'];

   if($password === $confirmpassword){
    $matchPassword = $password;
    $result = $auth->updateUser($userId, $username, $firstname, $lastname, $email, $password);
         if($result){
             return new StatusMessage('success', $result);
          }else{
            return new StatusMessage('error', 'Error in Sending');
        }
    }
}

    if(isset($_POST['addContact'])){
        $userId = $_SESSION['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        
        
    }

}
    

// $action = $_POST['edit'];
//     switch($action){

//         case 'updateUser':
//             $userId = $_SESSION['user_id'];
//             $username = $_POST['username'];
//             $firstname = $_POST['firstname'];
//             $lastname = $_POST['lastname'];
//             $email = $_POST['email'];
//             $password = $_POST['password'];
            
//            $confirmpassword = $_POST['confirmpassword'];
//             if($password === $confirmpassword){
//              $matchPassword = $password;
//              $result = $auth->updateUser($userId, $username, $firstname, $lastname, $email, $password);
//             if($result){
//                 echo $result;
//                 break;
//             }else{
//                 echo "Error in Sending";
//                 break;
//             }

//             }else{
//                 $statusMessage = new StatusMessage('error', 'Check Your Password');
//                 echo "You add Password but not match";
//                 break;
//             }
        
//         default:
//             $statusMessage = new StatusMessage('error', 'No Form Connected');
//             echo "You add Password but not match";
//             break;
//     }