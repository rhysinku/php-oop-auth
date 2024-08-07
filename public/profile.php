<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>



<?php 
AuthMiddleware::checkAuth();

$auth = new AuthController();
$currentUser =  $auth->getUser($_SESSION['user_id']);

?>

<div id="update_modal" class="update_modal">
    <div class="update_modal__box">
    <div class="update_modal__header">
    <h3>Update your Profile</h3> <span id="modal_close">&#10006;</span>
    </div>

    <form class="form" action="" method="PUT">
        <div class="input_form">
            <span>Username</span>
             <input name="username" type="text" value="<?php echo $currentUser->username; ?>" placeholder="New Username">
        </div>
        <div class="input_form">
             <span>Email</span>
             <input name="email" type="text" value="<?php echo $currentUser->email; ?>" placeholder="New Email">
        </div>
        <div class="input_form">
            <span>Password</span>
             <input name="password" type="text" placeholder="New Password" >
        </div>
        <div class="input_form">
        <span>Confirm Password</span>
             <input name="confirmpassword" type="text" placeholder="Confirm New Password" >
        </div>

        <div class="form__btn_con">
        <button class="btn">Update</button>
        <button class="btn">Close</button>
        </div>
    
    </form>

    </div>
    </div>

<main>
    <div class="wrapper">
       
    <div class="profile_con">
    <h1>Welcome, <?php echo $currentUser->username; ?></h1>
       <div class="profile_con__info">
       <p>Email: <a href="mailto:<?php echo $currentUser->email ?>"><?php echo $currentUser->email ?></a></p>
       </div>

        <button id="update_btn" class="btn">Edit Profile</button>
    </div>
        <a href="logout.php" class="btn">LogOut</a>
    </div>
</main>

<?php include('includes/Footer.php') ?>