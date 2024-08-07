<?php 

class AuthMiddleware{

 

    public static function checkAuth(){
        if(!isset($_SESSION['user_id'])){
            header("Location: login.php");
            exit();
        }
    }

    public function isLogin(){
      return isset($_SESSION["user_id"]);
    }

}

