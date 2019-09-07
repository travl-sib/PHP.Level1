<?php
// Задание 1
    $a=mt_rand(-100,100);
    $b=mt_rand(-100,100);
    echo "a=".$a." ; "."b=".$b."<br>";

    if (($a>=0) && ($b>=0)){ 
        echo $a-$b;
    }
   elseif (($a<0) && ($b<0)) {
      echo $a*$b;
    } 
    else {
        echo $a+$b;
    }

echo '<br>';
    //Задание 2
    $a=mt_rand(0,15);
    switch ($a) {
        case 0:
            echo 0;
        case 1:
            echo 1;
        case 2:
            echo 2;
        case 3:
            echo 3;
        case 4:
            echo 4;
        case 5:
            echo 5;
        case 6:
            echo 6;
        case 7:
            echo 7;
         case 8:
            echo 8;
        case 9:
            echo 9;
        case 10:
            echo 10;
        case 11:
            echo 11;
        case 12:
            echo 12;
        case 13:
            echo 13;
        case 14:
            echo 14;
        case 15:
            echo 15;
        break;
    }


    //Задание3
function add($a,$b) {
    return $a+$b;
}

function subtract($a,$b) {
    return $a-$b;
}

function multiply($a,$b) {
    return $a*$b;
}

function divide($a,$b) {
    return $a/$b;
}


    //Задание4
function mathOperation($arg1, $arg2, $operation="Сложение"){
    switch ($operation) {
        case 'Сложение':
           echo add($arg1, $arg2);
            break;
        case 'Вычитание':
           echo subtract($arg1, $arg2);
            break;
        case 'Умножение':
           echo multiply($arg1, $arg2);
            break;
        case 'Деление':
           echo divide($arg1, $arg2);
            break;
}
}
echo '<br>';
mathOperation (5, 6, "Умножение");

    //Задание6
function power($val, $pow){
    if ($pow==1){
        return $val;
    }
    return $val*power($val, $pow-1);
}

echo '<br>';
echo power (3,4);



    //Задание7

function getHours(){
    $hour=date('H',time());
    if (($hour==1) || ($hour==21)){
        return $hour." час";
    }
    elseif ((($hour>1)&&($hour<5))||($hour>21)){
        return $hour." часа";
    }
    return $hour." часов";
}

function getMinutes(){
    $min=date('i',time());
    if (($min==1) || ($min[1]==1)){
        return $min." минута";
    }
    elseif ((($min>1)&&($min<5))||(($min[1]>1)&&($min[1]<5))){
        return $min." минуты";
    }
    return $min." минут";
}

function currentTime(){
    echo getHours()." ".getMinutes();
}

echo '<br>';
currentTime()
?>