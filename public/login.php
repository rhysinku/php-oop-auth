<?php 
require_once 'init.php';

?>

<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>


<?php



?>

<main>
    <div class="wrapper">
        <div class="form_con">

            <h1>Login Here</h1>

            <form action="" class="form">

                <div class="input_form">
                    <span>Username</span>
                    <input type="text" name="name" required>
                </div>

                <div class="input_form">
                    <span>Password</span>
                    <input type="text" name="password" required>
                </div>

                <button class="btn">
                    Login
                </button>

                <p><a href="">Register Here</a></p>
            </form>

        </div>
    </div>
</main>

<?php include('includes/Footer.php') ?>