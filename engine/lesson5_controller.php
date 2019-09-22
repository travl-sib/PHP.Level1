<?php
//Все товары
$goods_bd = mysqli_query(myDbConnect(), "SELECT * FROM goods");
$goods = [];

while ($row = mysqli_fetch_assoc($goods_bd)) {
	$goods[] = $row;
    
}

//Конкретный товар
if ($search){
$result_bd = mysqli_query(myDbConnect(), $search_query);
$cart = mysqli_fetch_assoc($result_bd);
}


mysqli_close(myDbConnect());

