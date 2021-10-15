<?php

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
    case ($age >=10 && $age <=15):
        echo"Your are eligale ha";
    break; 
    default:
    echo "Today is Holiday";
} 