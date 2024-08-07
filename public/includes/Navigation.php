<?php 

$authAccount = new AuthMiddleware();
$isLoggin = $authAccount->isLogin(); 

?>
<header>
    <div class="wrapper">
        <div class="header_con wr_con">
            <h1><a href="index.php">OOP-AUTH</a></h1>
            <nav class="header-nav">
                <ul>

                <?php if($isLoggin) : ?>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                <?php else : ?>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif ?>

                </ul>
            </nav>
        </div>
    </div>
</header>