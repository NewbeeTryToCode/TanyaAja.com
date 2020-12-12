<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | TanyaAja?.com</title>
    <link rel="stylesheet" href="../../Public/assets/css/style.css">
    <link rel="stylesheet" href="../../Public/assets/icons/css/all.css">
    <link rel="stylesheet" href="../../Public/assets/css/signup.css">
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
                <li><a href="signup.php">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <section class="main-section">
        <div class="img-wrapper">

        </div>
        <div class="main-form">
            <h1 class="tittle">Sign up</h1>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <span><i class="fas fa-eye" id="showpass"></i></span>
                    <div class="popover-password">
                        <p><span class="result"></span></p>
                        <div class="progress">
                            <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="low-upper-case">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                Lowercase &amp; Uppercase
                            </span>
                        </li>
                        <li>
                            <span class="one-number">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                Number (0-9)
                            </span>
                        </li>
                        <li>
                            <span class="one-special-char">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                Special character (!@#$%^&*)
                            </span>
                        </li>
                        <li>
                            <span class="eight-character">
                                <i class="fas fa-circle" aria-hidden="true"></i>
                                Atleast 8 character
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="input-group btn">
                    <button class="btn-login">Sign up</button>
                </div>
                <div class="form-footer">
                    <p>Already had an account? <a href="login.php" class="link">Login</a></p>
                </div>
            </form>
        </div>
    </section>
    <div class="graphic1"></div>
    <div class="graphic2"></div>
    <div class="dash"></div>
    <div class="rounded-dash"></div>
    <div class="x1"></div>
    <div class="x2"></div>
    <div class="x3"></div>
    <script src="../../Public/assets/js/script.js"></script>
</body>

</html>