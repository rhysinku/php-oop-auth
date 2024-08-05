<?php
session_start();




function isLogin (){
    return isset($_SESSION['user_id']);
}

function redirectAuth(){
    if(isLogin()){
     return   header("location: profile.php");
    }
    return header("location: login.php");
}



