<?php
session_start();

function checkSession (){
    session_start();
    if( !isset($_SESSION['user_id'])){
    header('Location: login.php');
    }
}


function isLogin (){
    return isset($_SESSION['user_id']);
}