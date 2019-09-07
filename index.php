<?php
// Задание 1
 $i=0;

 while ( $i<= 100) {
 	if ($i%3 == 0){
 		echo $i." ";
 	}
 	$i++;
 }

    //Задание 2
 echo '<br>';
 $i= 0;
do {
  if ($i == 0) 
  	echo $i." - ноль."."<br>";
  elseif ($i%2 == 0) 
  	echo $i." - четное число."."<br>";
  else 
  	echo $i." - нечетное число."."<br>";
  $i++;
}
while ( $i<= 10) ;

    //Задание3
$regions= [
  'Московская область'=> ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область'=> ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
  'Рязанская область'=> ['Касимов', 'Кораблино', 'Михайлов', 'Новомичуринск', 'Рыбное']
 // 'Красноярский край'=> ['', '', '', '', ''],
  //'Новосибирская область'=> ['', '', '', '', ''],
];
foreach ($regions as $region => $citys) {
	echo $region.':<br>';
	foreach ($citys as $key => $city) {
		$sign=', ';
		if ($key== (count($citys)-1))
			$sign='.<br>';
		echo $city.$sign;
	}
}

    //Задание4

$translit= ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'″', 'ы'=>'y', 'ь'=>'′', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya'];

function getTranslit($str){
	global $translit;
	$result=strtr($str, $translit);
 	return $result;
 }
echo "<br>";
echo getTranslit('китай');

    //Задание5
function getUnderline($str){
	$result=strtr($str, ' ', "_");
 	return $result;
 }
echo "<br>";
echo getUnderline('китай будет там');
echo "<br>";

    //Задание6
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>lesson3</title>
  </head>
  <body>

<ul class="nav nav-tabs">

 <?php foreach ($regions as $region => $citys): ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $region ?></a>
    <div class="dropdown-menu">
    	<?php foreach ($citys as $num => $city): ?>
      <a class="dropdown-item" href="#"><?= $city ?></a>
         <?php endforeach;?>
          </div>
  </li>

 <?php endforeach;?>
</ul>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<?php

//Задание7
for ($i=0; $i < 10; print($i), $i++) { 
};

//Задание8
echo "<br>";

foreach ($regions as $region => $citys) {
	echo $region.':<br>';
	foreach ($citys as $key => $city) {
		$city1=preg_split('//u', $city, null,PREG_SPLIT_NO_EMPTY);
		if ($city1[0] != 'К') { 
			continue;}
		$sign=', ';
		if ($key== (count($citys)-1))
			$sign='.<br>';
		echo $city.$sign;
	}
}

//Задание9

function changeStr($str) {
return getUnderline (getTranslit($str));	
}
echo "<br>";
echo changeStr('китай будет там');
?>