<?php 

//$var = 29;
$var = true;
$var = "hellow@gmail.com";
$var = "https://iamsharif.com/test/page.php";
$var = "192.168.1.100";
$var = "FA-F9-DD-B2-5E-0D";

//echo filter_var($var, FILTER_VALIDATE_INT);
//var_dump(filter_var($var, FILTER_VALIDATE_INT));

// if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) == 0){
//     echo"<br> $var is integer";
// }else {
//     echo "<br> $var is not integer";
//     //echo "<br> $var it bolian valo";
// }

// $options = array(
//     "options" => array(
//         "min_range"=> 20,
//         "max_range"=>30
//     )
// );

// if(filter_var($var, FILTER_VALIDATE_INT,$options)){
//     echo "<br>$var is integer.";
// }else {
//     echo "<br>$var is not an integer";
// }
// if(filter_var($var, FILTER_VALIDATE_FLOAT)){
//     echo "<br>$var is Float.";
// }else {
//     echo "<br>$var is not an Float";
// }

// if(filter_var($var, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
//     echo "<br>$var is Boolean.";
// }else {
//     echo "<br>$var is not an Boolean";
// }

// if(filter_var($var, FILTER_VALIDATE_EMAIL)){
//     echo "<br>$var is valid email.";
// }else {
//     echo "<br>$var is not valid email";
// }

// if(filter_var($var, FILTER_VALIDATE_URL)){
//     echo "<br>$var is valid url.";
// }else {
//     echo "<br>$var is not valid url";
// }

// if(filter_var($var, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
//     echo "<br>$var is valid url.";
// }else {
//     echo "<br>$var is not valid url";
// }


// if(filter_var($var, FILTER_VALIDATE_IP)){
//     echo "<br>$var is valid IP.";
// }else {
//     echo "<br>$var is not valid IP";
// }


if(filter_var($var, FILTER_VALIDATE_MAC)){
    echo "<br>$var is valid MAC.";
}else {
    echo "<br>$var is not valid MAC";
}







// if(filter_var($var, FILTER_VALIDATE_INT, array("options" => array("min_range" => 20, "max_range" => 30)))){
//     echo "<br> $var is integer.";
// }else {
//     echo "<br>$var is not an integer";
// }