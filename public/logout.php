<?php 
session_start();
require_once dirname(__DIR__)."/Controller/UserAuth.auth.php";

$auth = new AuthController();

if($auth->logout()){
 header("location: login.php");
 exit();
}
header("location: profile.php");
exit();


