<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>



<?php 
use Middleware\AuthMiddleware;

$auth = new AuthMiddleware();
$status = $auth->isLogin();

 if ($status){
     header("location: profile.php");
     exit();
 }

    header("location: login.php");
    exit();

    
?>
