<?php 

require_once dirname(__DIR__)."/Controller/UserAuth.auth.php";

$auth = new AuthController();
$auth->logout();

return header("location: login.php");
