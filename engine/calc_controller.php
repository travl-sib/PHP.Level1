<?php

if (is_numeric($_GET['operation']) && is_numeric($_GET['number1']) && is_numeric($_GET['number2'])) {
$operation = $_GET['operation'];
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
    
function add($number1,$number2) {
    return $number1+$number2;
}
function subtract($number1,$number2) {
    return $number1-$number2;
}
function multiply($number1,$number2) {
    return $number1*$number2;
}
function divide($number1,$number2) {
   if ($number2 == 0) return "Деление на ноль";
    return $number1/$number2;
}

switch ($operation) {
		case 1: $result = add($number1, $number2);break;
		case 2: $result = subtract($number1, $number2);break;
		case 3: $result = multiply($number1, $number2);break;
		case 4: $result = divide($number1, $number2);break;

}

}