<?php

// Check Session
function checkSession (){
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
    }
}