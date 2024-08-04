<?php 
require_once 'init.php';

?>


<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $auth = new AuthController();
    $result = $auth->register($username , $email , $password , $confirmpassword );
    if($result){
        var_dump($result);
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

                <div class="input_form">
                    <span>Confirm Password</span>
                    <input type="text" name="confirmpassword">
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