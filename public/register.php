<?php 
require_once 'init.php';
require_once dirname(__DIR__).'/Util/auth.util.php'; 
?>


<?php include('includes/Header.php') ?>
<?php include('includes/Navigation.php') ?>


<?php
// With Validation
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $requiredFields = ['username', 'email', 'password', 'confirmpassword'];
//     $validate = validateInputs($_POST, $requiredFields);

//     $processedData = $validate['data'];
//     $errors = $validate['errors'];

//     if (!empty($errors)) {
//         foreach ($errors as $error) {
//             echo "<p>Error: $error</p>";
//         }
//     } else {
//         $username = $processedData['username'];
//         $email = $processedData['email'];
//         $password = $processedData['password'];
//         $confirmpassword = $processedData['confirmpassword'];

//         $auth = new AuthController();
//         $result = $auth->register($username, $email, $password, $confirmpassword);
//     }
// }

// With Out Validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $auth = new AuthController();
    $result = $auth->register($username , $email , $password ,$confirmpassword);
    if($result){
        echo var_dump($result);
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
                    <input type="text" name="username" required>
                </div>

                <div class="input_form">
                    <span>Email Address</span>
                    <input type="text" name="email" required>
                </div>

                <div class="input_form">
                    <span>Password</span>
                    <input type="text" name="password" required>
                </div>

                <div class="input_form">
                    <span>Confirm Password</span>
                    <input type="text" name="confirmpassword" required>
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