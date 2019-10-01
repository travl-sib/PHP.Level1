<?php

session_start();

include './engine/autoload.php';
autoload('config');


include ENGINE_DIR . 'search_controller.php';
include ENGINE_DIR . 'lesson5_controller.php';
include ENGINE_DIR . 'session_destroy.php';

include ENGINE_DIR . 'login_controller.php';
include ENGINE_DIR . 'delete_good.php';


include PUBLIC_DIR . 'header.php';

include PUBLIC_DIR . 'auth_check.php';
//include PUBLIC_DIR . 'search.php';
//include PUBLIC_DIR . 'db-table__less5.php';
include PUBLIC_DIR . 'cart_of_good.php';
include PUBLIC_DIR . 'modal_insert.php';
 print_r($insert_query);

include PUBLIC_DIR . 'footer.php';
?>