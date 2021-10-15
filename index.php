<?php

$per = 57;

if($per >= 80 && $per <=100){
    echo"You are Merit";
}elseif($per >= 60 && $per <=80) {
    echo "You are in 1st Division";
}elseif($per >= 50 && $per <= 60){
    echo "You are in 2nd Division";
}elseif($per >= 33 && $per <= 50){
    echo"You are in 3rd Division";
}elseif ($per < 33){
    echo"You are Fail";
}else {
    echo"Please enter the valid percentage";
}

echo "</br>";

if($per >= 80 && $per <=100):
    echo"You are Merit";
elseif($per >= 60 && $per <=80) :
    echo "You are in 1st Division";
elseif($per >= 50 && $per <= 60):
    echo "You are in 2nd Division";
elseif($per >= 33 && $per <= 50):
    echo"You are in 3rd Division";
elseif ($per < 33):
    echo"You are Fail";
else :
    echo"Please enter the valid percentage";
endif;

echo "</br>";

$weekday = 3;

switch($weekday) {
    case 1:
        echo"Today is saturday";
    break; 
    case 2:
        echo"Today is Sunday"; 
    break;
    default:
    echo "Today is Holiday";
}   

echo "</br>";
$age = 20;

switch(true) {
    case ($age >=15 && $age <=20):
        echo"Your are eligale ha";
    break; 
    default:
    echo "Today is Holiday";
} 