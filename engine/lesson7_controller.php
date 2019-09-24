<?php



session_start();

setcookie ('name', 'andrei', time()+24*60*60);

$_SESSION['name'] = 'andrei';

$password = '12345';

$password_hash = password_hash($password, PASSWORD_BCRYPT);
$isAuth = password_verify($password, $password_hash);

session_destroy();

if ($isAuth){
//    echo "Password confirmed";
    $_SESSION['isAuth'] = true;
}
else{
  //  echo 'Password wrong';
}