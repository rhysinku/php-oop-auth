
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
use Controllers\AuthController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $auth = new AuthController();
    $result = $auth->register($username , $firstname, $lastname, $email , $password ,$confirmpassword);
    if($result){
        $error_msg= $result;
    }else{
        $error_msg= $result;
    }

}

?>


<main>
    <div class="wrapper">
        <div class="form_con">

            <h1>Create Account</h1>

            <form action="" class="form" method="POST">

                <div class="input_form flex-col">
                <div class="input_form"> <span>First Name</span> <input type="text" name="firstname" required> </div>
                <div class="input_form"> <span>Last Name</span> <input type="text" name="lastname" required> </div>
                </div>
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
                <?php include('includes/DisplayStatus.php') ?>
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </form>

        </div>
    </div>
</main>

<?php include('includes/Footer.php') ?>