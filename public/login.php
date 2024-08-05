<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>


<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

    $auth = new AuthController();
    $result =  $auth->login($useremail, $userpassword);
    
    if($result){
        return $result;
    }else{
        echo "Login Failed";
    }
}
?>

<main>
    <div class="wrapper">
        <div class="form_con">

            <h1>Login Here</h1>

            <form action="" class="form" method="POST">

                <div class="input_form">
                    <span>Email</span>
                    <input type="text" name="email">
                </div>

                <div class="input_form">
                    <span>Password</span>
                    <input type="text" name="password">
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