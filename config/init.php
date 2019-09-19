<?php

function myDbConnect (){
    
    $config = require SITE_DIR.'config/db_configs/db_config.php';
    $mysql = mysqli_connect(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name']
    ) or die ('Not connection to DB');
    
    
    
    return $mysql;
}