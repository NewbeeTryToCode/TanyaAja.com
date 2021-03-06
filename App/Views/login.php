<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TanyaAja?.com</title>
    <link rel="icons" href="../../Public/assets/img/logo2.png" type="image/x-icons">
    <link rel="stylesheet" href="../../Public/assets/icons/css/all.css">
    <link rel="stylesheet" href="../../Public/assets/css/style.css">
    <link rel="stylesheet" href="../../Public/assets/css/login.css">
</head>

<body class="full-height-grow container">
    <header class="main-header">
        <div class="brand-logo">
            <a href="../../Public/index.php">
                <img src="../../Public/assets/img/logo2.png" alt="TanyaAja?.com">
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="../../Public/index.php">Home</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="signup.php">Sign up</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="main-section">
        <div class="img-wrapper">
        </div>
        <div class="main-form">
            <h1 class="tittle">Login</h1>
            <?php if (isset($_SESSION['errormsg'])) {
                echo "<div class='error_msg'>" . $_SESSION['errormsg'] . "</div>";
            }
            unset($_SESSION['errormsg']); ?>
            <?php if (isset($_SESSION['successmsg'])) {
                echo "<div class='success_msg'>" . $_SESSION['successmsg'] . "</div>";
            }
            unset($_SESSION['successmsg']); ?>
            <form action="../CRUD/Auth/login.inc.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <span><i class="fas fa-eye" id="showpass"></i></span>
                </div>
                <div class="input-group btn">
                    <button type="submit" class="btn-login">Login</button>
                </div>
                <div class="form-footer">
                    <p>Dont have account yet?
                        <a href="signup.php" class="link">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
    <div class="graphic1"></div>
    <div class="graphic2"></div>
    <div class="rounded-dash"></div>
    <div class="dash"></div>
    <div class="x1"></div>
    <div class="x2"></div>
    <div class="x3"></div>
    <div class="x4"></div>
    <div class="x5"></div>
    <script src="../../Public/assets/js/script.js"></script>
</body>

</html>