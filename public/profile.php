<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>



<?php 
$auth = new AuthController();
$currentUser =  $auth->getUser($_SESSION['user_id']);

?>

<main>
    <div class="wrapper">
        <h1>Welcome, <?php echo $currentUser->username; ?></h1>
        <p>Email: <?php echo $currentUser->email ?></p>

        <button href="" class="btn">LogOut</button>
    </div>
</main>

<?php include('includes/Footer.php') ?>