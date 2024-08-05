<?php
session_start();

function checkSession (){
    if( !isset($_SESSION['user_id'])){
    header('Location: login.php');
    }
}


function isLogin (){
    return isset($_SESSION['user_id']);
}


