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


$str = "hellow";
echo "the string : " . $str . "<br></br>";
echo "the Binary : " . md5($str, true ). "<br></br>";
echo "the hex : " . md5($str). "<br></br>";
echo "the Binary : " . sha1($str, true ). "<br></br>";
echo "the Binary : " . sha1($str ). "<br></br>";