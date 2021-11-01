<?php

//Local Variable

function test(){
    $x = "wordpress";
    echo "this is new site $x <br>";
}

test();

//global Variable
$x = "Javascript";
function lol(){
    global $x;
    echo "this is new site $x <br>";
}

lol();



//global Variable - 2
$x = "Javascript";
$y  = "Php";
function MyFun(){
    global $x, $y;
    echo "this is new site $x & $y";
}

MyFun();