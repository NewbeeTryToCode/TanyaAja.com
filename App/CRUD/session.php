<?php 

session_start();

// cek session, kalo gak ada kembali ke login
if( !isset($_SESSION['login']) ){
    header("Location:login.php");
    exit;
}

// ambil data user
$user = [
    "username" => $_SESSION['username'],
    "id" => $_SESSION['id'],
    "role" => $_SESSION['role']
];