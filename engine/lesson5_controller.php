<?php

$query = 'SELECT * FROM gallery';

$result_bd = mysqli_query(myDbConnect(), $query);


$pictures=[];
while ($row = mysqli_fetch_assoc($result_bd)){
    $pictures[] = $row;
 }

mysqli_close(myDbConnect());