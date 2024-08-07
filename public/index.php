<?php
session_start();
require_once dirname(__DIR__). '/Middleware/AuthMiddleware.php';


$auth = new AuthMiddleware();
$status = $auth->isLogin();

 if ($status){
     header("location: profile.php");
     exit();
 }

    header("location: login.php");
    exit();
 
 
