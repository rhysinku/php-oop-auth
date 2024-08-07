<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>



<?php 
AuthMiddleware::checkAuth();

$auth = new AuthController();
$currentUser =  $auth->getUser($_SESSION['user_id']);

?>

<main>
    <div class="wrapper">
       
    <div class="profile_con">
    <h1>Welcome, <?php echo $currentUser->username; ?></h1>
       <div class="profile_con__info">
       <p>Email: <a href="mailto:<?php echo $currentUser->email ?>"><?php echo $currentUser->email ?></a></p>
       </div>

        <button  class="btn">Edit Profile</button>
    </div>
        <a href="logout.php" class="btn">LogOut</a>
    </div>
</main>

<?php include('includes/Footer.php') ?>