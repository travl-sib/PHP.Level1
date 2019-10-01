<?php

function getUser ($login) {
    $query_auth = sprintf('SELECT * FROM USER WHERE user_login = "%s" LIMIT 1;', $login);
    
    $mysql_auth = mysqli_query(myDbConnect(), $query_auth);
    $user= mysqli_fetch_assoc ($mysql_auth);
    
    if (isset($user))
    return $user;
    return false;
}
