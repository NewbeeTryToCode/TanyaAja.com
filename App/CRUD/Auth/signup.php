<?php
session_start();
include "../konek.db.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $user = validate($_POST['username']);
  $pwd = validate($_POST['password']);
  $email = validate($_POST['email']);


  if (empty($user) && empty($pwd) && empty($email)) {
    $_SESSION['errormsg'] = "username, email, & password required";
    header("Location: ../../Views/signup.php");
    exit();
  } else if (empty($user) && empty($pwd)) {
    $_SESSION['errormsg'] = "username & password required";
    header("Location: ../../Views/signup.php");
    exit();
  } else if (empty($email) && empty($pwd)) {
    $_SESSION['errormsg'] = "email & password required";
    header("Location: ../../Views/signup.php");
    exit();
  } else if (empty($user) && empty($email)) {
    $_SESSION['errormsg'] = "username & email required";
    header("Location: ../../Views/signup.php");
    exit();
  } else if (empty($user)) {
    $_SESSION['errormsg'] = "username required";
    header("Location: ../../Views/signup.php");
    exit();
  } elseif (empty($pwd)) {
    $_SESSION['errormsg'] = "password required";
    header("Location: ../../Views/signup.php");
    exit();
  } elseif (empty($email)) {
    $_SESSION['errormsg'] = "email required";
    header("Location: ../../Views/signup.php");
    exit();
  } else {
    //cek di db apakah user sudah ada
    $user_check_query = "SELECT * FROM users WHERE username = '$user' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $userlist = mysqli_fetch_assoc($result);
    //cek user
    if ($userlist) {
      //cek username
      if ($userlist['username'] === $user) {
        $_SESSION['errormsg'] = "username already exists";
        header("Location: ../../Views/signup.php");
        exit();
      }
      //cek email
      if ($userlist['email'] === $email) {
        $_SESSION['errormsg'] = "email already exists";
        header("Location: ../../Views/signup.php");
        exit();
      }
    } // buka tudak ada error
    else {
      //encrypt password sebelum masuk db
      $password = md5($pwd);
      $query = "INSERT INTO users (username,email,password,role, prof, back) VALUES('$user','$email','$password','user','avatar.png','unnamed.jpg')";
      mysqli_query($conn, $query);
      $_SESSION['successmsg'] = "user berhasil dibuat";
      header("Location: ../../Views/login.php");
      exit();
    }
  }
}
