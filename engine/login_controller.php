<?php
session_start();

$login = '';
$password = '';
$status = '';

function safe ($data){
    return (htmlspecialchars(strip_tags($data)));
    
}

if (isset($_POST['login']) && isset($_POST['password'])){
    $login = safe ($_POST['login']);
    $password = safe ($_POST['password']);
    
    $user = getUser($login);
if ($user){
    if (password_verify($password, $user['user_password'])){
        $_SESSION['isAuth'] = true;
        $_SESSION['username'] = $user['user_name'];
        $_SESSION['id_user'] = $user['id_user'];
        header ('location: /index.php');
        die;
    }
    else {
        $status = "Пароль не верен, повторите";
        $_SESSION['isAuth'] = false;
    }}
    else {
        $status = "логин не верен, повторите";
        $_SESSION['isAuth'] = false;
    }
}    

session_write_close();