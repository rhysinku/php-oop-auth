<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>

<?php 
require_once '../Database/Database.class.php';
require_once '../Model/User.model.php';
require_once '../Controller/UserAuth.auth.php';

?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $auth = new AuthController();
    if($auth->register($username , $email , $password )){
        echo 'User created successfully';
    }else{
        echo 'User Not Created';
    }
    
    
    
}


?>


<main>
    <div class="wrapper">
        <div class="form_con">

            <h1>Create Account</h1>

            <form action="" class="form" method="POST">

                <div class="input_form">
                    <span>Username</span>
                    <input type="text" name="username">
                </div>

                <div class="input_form">
                    <span>Email Address</span>
                    <input type="text" name="email">
                </div>

                <div class="input_form">
                    <span>Password</span>
                    <input type="text" name="password">
                </div>

                <button class="btn">
                    Sign Up
                </button>

                <p><a href="">Register Here</a></p>
            </form>

        </div>
    </div>
</main>

<?php include('includes/Footer.php') ?>