<?php

// echo strrev("I am sharif");

// echo "<br>";

// echo str_shuffle("I am sharif");

//echo strcmp("shariful islam", "shariful islam ddddd");
// echo strncmp("shariful islam", "shariful islam ddddd", 4);
// echo strcasecmp("shariful islam", "shariful islam ddddd");

// echo strrev("sharif");
// echo "<br>";

// echo str_shuffle("sharif");

// $str = "wos";

// // echo str_pad($str, 5, "*");

// //echo str_pad($str, 20, "*", STR_PAD_BOTH);

// echo str_repeat($str, 5);


// $str = "Yahoo baba <br>'sharif'";


// // echo htmlentities($str);
// // echo htmlentities($str, ENT_QUOTES);
// // echo htmlentities($str, ENT_NOQUOTES);
// echo $htmlent = htmlspecialchars($str, ENT_QUOTES);
// echo "<pre>";
// print_r(get_html_translation_table(HTML_ENTITIES));
// echo "</pre>";

// $newStr = addslashes($str);
// echo stripslashes($newStr);

// echo $str . "<br>";
// // echo trim($str, "Ya");
// echo chop($str, "Ya");


// $str = "hellow world";

// // echo "the string : " . $str . "<br></br>";
// // echo "the Binary : " . md5($str, true ). "<br></br>";
// // echo "the hex : " . md5($str). "<br></br>";
// // echo "the Binary : " . sha1($str, true ). "<br></br>";
// // echo "the Binary : " . sha1($str ). "<br></br>";


// $encode = convert_uuencode($str)."<br>";
// echo $encode . "<br>";
// $decode = convert_uudecode($encode);

// echo $decode;

//  $not = hex2bin("hellow world") . "<br>";

// echo $not;
// echo hex2bin($not);

// $lol = chr(3);
// $lol = ord("A");
// echo $lol;

// $str = "I am shariful islam";

// echo wordwrap($str, 4, "<br>", true);

// $val = min(array(3,4,5,6), array(5,6,4,3));
// $val = max(array(3,4,5,6), array(5,6,4,3));

// echo "<pre>";
// print_r($val);

// echo "</pre>";

// echo (ceil(0.60). "<br>");
// echo (ceil(0.40). "<br>");
// echo (ceil(5). "<br>");
// echo (ceil(5.1). "<br>");
// echo (ceil(-5.1). "<br>");

// echo (floor(0.60). "<br>");
// echo (floor(0.40). "<br>");
// echo (floor(5). "<br>");
// echo (floor(5.1). "<br>");
// echo (floor(-5.1). "<br>");

// echo (round(0.60). "<br>");
// echo (round(0.40). "<br>");
// echo (round(5). "<br>");
// echo (round(5.1). "<br>");
// echo (round(-5.1). "<br>");

// echo (abs(0.60). "<br>");
// echo (abs(0.40). "<br>");
// echo (abs(5). "<br>");
// echo (abs(5.1). "<br>");
// echo (abs(-5.1). "<br>");


// echo sqrt(5);
// echo pow(5, 4);


// echo rand()."<br>";
// echo mt_rand()."<br>";
// echo lcg_value();

// echo "Full Date : " . date("D-M-Y"). "<br>";
// echo "Full Date : " . date("d-m-y"). "<br>";
// echo "Full Date : " . date("N"). "<br>";
// echo "Full Date : " . date("w"). "<br>";
// echo "Full Date : " . date("W"). "<br>";
// echo "Day of Month : " . date("t"). "<br>";
// echo "Day is : " . date("z");

// echo "Hour is : " . date("h"). "<br>";
// echo "Minutes is : " . date("i"). "<br>";
// echo "Second is : " . date("s"). "<br>";
// echo "Meridium is : " . date("A"). "<br>";
// echo "Meridium is : " . date("a"). "<br>";

// echo "Time is : " . date("h:i:a e") ."<br>";

// echo "Time is : " . date(" d-m-y h:i:a e")."<br>";

// date_default_timezone_set("Asia/Dhaka")."<br>";
// echo "Time is : " . date(" d-m-y h:i:a e")."<br>";


// echo date ("l", mktime(0,0,0,10, 13, 2003))."<br>";
// echo date ("d-m-y", mktime(0,0,0,10, 13, 2003))."<br>";
// echo date ("h-i-s", mktime(0,0,0,10, 13, 2003))."<br>";
// echo date ("h-i-s d-m-y", gmmktime(0,0,0,10, 13, 2003));


$date = date_create("2024-03-23 22:34:00");
echo date_format($date, "d/m/y H:i:s e");