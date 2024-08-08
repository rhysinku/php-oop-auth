<?php 
session_start();
require_once __DIR__ . '/../autoload.php';
use Controllers\AuthController;

$auth = new AuthController();

if($auth->logout()){
 header("location: login.php");
 exit();
}
header("location: profile.php");
exit();


