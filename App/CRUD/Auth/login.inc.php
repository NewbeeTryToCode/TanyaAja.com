<?php
include "../konek.db.php";
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['username']);
    $pwd = validate($_POST['password']);

    if (empty($user) && empty($pwd)) {
        $_SESSION['errormsg'] = "username & password required";
        header("Location: ../../Views/login.php");
        exit();
    } else if (empty($user)) {
        $_SESSION['errormsg'] = "username required";
        header("Location: ../../Views/login.php");
        exit();
    } elseif (empty($pwd)) {
        $_SESSION['errormsg'] = "password required";
        header("Location: ../../Views/login.php");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pwd'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pwd) {
                if ($row['role'] === 'admin') {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login'] = true;
                    header("Location: ../../Views/admin_manage_question.php");
                    exit();
                } elseif ($row['role'] === 'user') {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login'] = true;
                    header("Location: ../../Views/public_questions.php");
                    exit();
                } else {
                    $_SESSION['errormsg'] = "Wrong user type";
                    header("Location: ../../Views/login.php");
                    exit();
                }
            }
        } else {
            $_SESSION['errormsg'] = "incorrect username and password";
            header("Location: ../../Views/login.php");
            exit();
        }
    }
} else {
    $_SESSION['errormsg'] = "No user";
    header("Location: ../../Views/login.php");
    exit();
}
