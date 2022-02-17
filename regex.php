<?php

$string = "Php is the web scripting language of choice.";

//$exp = preg_match("/PHP/ i", $string);
//$exp = preg_match_all("/php|web|the|of/i", $string,$array);
$exp = preg_match_all("/[a-z, | 0-100]/", $string,$array);

if($exp) {
    echo "A match was found";
}else {
    echo "A match was not found";
}

echo "<pre>";

print_r($array);

echo "</pre>";

echo $array[0][0];