<?php

// $var = "ram(.kumar)@exa//mple.com";
// $var1 = "https://iamsharif.com";
// $var2 = "23";
// $var3 = "-45.44";
$var = "sharif website";

    // $var = filter_var($var, FILTER_SANITIZE_EMAIL);

    // if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    //     echo "<br>$var is valid email";
    // }else {
    //     echo "<br>$var is not an valid email";
    // }

    // $var1 = filter_var($var1, FILTER_SANITIZE_URL);

    // if(filter_var($var1, FILTER_VALIDATE_URL)){
    //     echo "<br>$var1 is valid URL";
    // }else {
    //     echo "<br>$var1 is not an valid URL";
    // }

    // $var2 = filter_var($var2, FILTER_SANITIZE_NUMBER_INT);

    // if(filter_var($var2, FILTER_VALIDATE_INT)){
    //     echo "<br>$var2 is valid integer";
    // }else {
    //     echo "<br>$var2 is not an valid integer";
    // }


    // $var3 = filter_var($var3, FILTER_SANITIZE_NUMBER_FLOAT);

    // if(filter_var($var3, FILTER_VALIDATE_FLOAT)){
    //     echo "<br>$var3 is valid FLOAT";
    // }else {
    //     echo "<br>$var3 is not an valid FLOAT";
    // }


   echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES);
   echo filter_var($var, FILTER_SANITIZE_STRING);
   echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP);
   echo  filter_var($var, FILTER_SANITIZE_ENCODED);
   echo  filter_var($var, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_LOW);
   
?>
