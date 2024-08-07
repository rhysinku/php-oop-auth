<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>


<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

  if(empty($useremail) || empty($userpassword)){
    $error_msg = "Fill the Forms";
  }else{
    $auth = new AuthController();
    $result =  $auth->login($useremail, $userpassword);
    
    if($result){
        return $result;
    }else{
       return $result;
    }
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
                    <input type="text" name="email" required>
                </div>

                <div class="input_form">
                    <span>Password</span>
                    <input type="text" name="password" required>
                </div>

                <button class="btn">
                    Login
                </button>

                <p>Dont have an account? <a href="register.php">Register Here</a></p>
            </form>

        </div>
    </div>
</main>

<?php include('includes/Footer.php') ?>