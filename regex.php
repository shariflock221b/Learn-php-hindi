<?php

//$string = "<h1>Php is the web scripting language of choice.</h1>";

// $string = "April 15, 2022";
// $string = "{startDate} = 1999-05-10";

// //$exp = preg_match("/PHP/ i", $string);
// //$exp = preg_match_all("/php|web|the|of/i", $string,$array);
// // $exp = preg_match_all("/[a-z, | 0-100]/", $string,$array);

// // if($exp) {
// //     echo "A match was found";
// // }else {
// //     echo "A match was not found";
// // }

// // echo "<pre>";

// // print_r($array);

// // echo "</pre>";

// // echo $array[0][0]; 


// //$pattern = "/web/i";
// $pattern = "/(\w+) (\d+) (\d+)/i";
// $pattern = array("/(19|20) (\d{2}) - (\d{1,2}) - (\d{1,2})/" ,"/^\s*{(\w+)}\s*=/");
// //$replacement = "Javascript";
// // $replacement = "\1 25,\3";
// // $replacement = "$1 25,$3";
// $replacement = array("$4/$3/$1$2", "$1 = ");
// echo preg_replace($pattern, $replacement, $string);


//echo preg_quote("http://");


$string = "https://www.iamsharif.com/folder/file.php";

$split = preg_split("/(web|of)/", $string);
$split = preg_split("/\/\//", $string, -1, PREG_SPLIT_NO_EMPTY);
$split = preg_split("/\/\//", $string, -1, PREG_SPLIT_OFFSET_CAPTURE);

echo "<pre>";
print_r($split);
echo "</pre>";