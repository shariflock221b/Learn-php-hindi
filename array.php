<?php
$colors = ["red", 20, "blue", 12.30, "green", 30.30];
echo $colors[1];
echo "<pre>";
print_r($colors);
echo "</pre>";

for($i = 0; $i < 4; $i++){
    echo  $colors[$i] . "<br>";
}

$age = [
    "bill" => 25,
    "stev" => 28,
    "elon" => 22
];


echo "<pre>";
print_r($age);
var_dump($age);
echo "</pre>";

echo $age ["bill"];