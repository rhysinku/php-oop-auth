<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>





<?php 

use Middleware\AuthMiddleware;
use Controllers\AuthController;

AuthMiddleware::checkAuth();

$auth = new AuthController();
$currentUser =  $auth->getUser($_SESSION['user_id']);

?>



<?php include('includes/Modal/UpdateUserModal.php') ?>


<main>
    <div class="wrapper">
       
    <div class="profile_con">
    <h1>Welcome, <?php echo $currentUser->username; ?></h1>
       <div class="profile_con__info">
       <p>First Name: <span> <?php echo $currentUser->firstname ?> </span></p>
       <p>Last Name: <span> <?php echo $currentUser->lastname ?> </span></p>
       <p>Email: <a href="mailto:<?php echo $currentUser->email ?>"><?php echo $currentUser->email ?></a></p>
       </div>

        <button id="update_btn" class="btn">Edit Profile</button>
    </div>
        <a href="logout.php" class="btn">LogOut</a>
    </div>
</main>

<?php include('includes/Footer.php') ?>