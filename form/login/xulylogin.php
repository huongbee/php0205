<?php
session_start();
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
$password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : null;
if($email == null || $password == null){
    $_SESSION['error'] = "Please login!";
    header('location: index.php');
    return;
}

// request db to get user info
if($email=='admin@gmail.com' && $password=='111111'){
    $userId = 121313; // get from db
    $_SESSION['user'] = md5(md5($userId));
    if(isset($_POST['rememberme']) && $_POST['rememberme']==1){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        setcookie('user', $_SESSION['user'], time() + 120);
    }
    header('location: home.php');
}
else{
    $_SESSION['error'] = "Login fail!";
    header('location: index.php');
}




?>