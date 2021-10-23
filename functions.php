<?php

// function myName(){
//     echo " My name is shariful Islam <br>";
// }



// myName();
// myName();
// myName();
// echo "Not my name is sharif, I am sawan <br>";
// myName();
// myName();
// myName();
// myName();


// functions parameters

// function MyValue($name1, $name2){
//     echo $name1 . $name2;
// }

// MyValue("Naimul ", "islam");

// Default Value of parameters ...

// function sum($a="10", $b="20"){
//     echo $a + $b;
// }

// sum();

// Return

// function sum($a, $b, $c) {
//     $v = $a + $b + $c;
//     return $v;
// }

// function percentage($st){
//     $l = $st / 3;
//     echo $l;
// }



// // echo sum(20, 30);

// $lol = sum(20, 30, 40);

// percentage($lol);
// //  echo $percentage();


// function result($bangla, $english, $math) {
//     $total = $bangla + $english + $math;
//     return $total;
// }


// function percentage($st) {
//     $per = $st / 3 . " %";
//     echo $per;
// }

// $mot = result(70, 80, 78);
// percentage($mot);


// function argument by reference



// function testing(&$string) {
//     $string .= "I am sharif three";
// }

// $lol = "I am sharif too";
// testing($lol);
// echo $lol;


// function first($num) {
//     $num += 5;
// }
// function second(&$num2) {
//     $num2 += 10;
// }

// $number = 10;
// first($number);
// echo "Original Value is:$number <br>";

// second($number);
// echo "Original Value is: $number <br>";

// Variable function 

// $sayHello = function ($lol, $lol2) {
//     echo "This" . $lol . $lol2;
// };

// $sayHello(" Name", " Sharif");

// Recursive function

// function display($number){
//     if($number <= 10) {
//         echo $number . "<br>";
//         display($number + 1);
//     }
// }


// display(1);

function factorial($n) {
    if($n == 0){
        return 1;
    }else {
        return($n * factorial($n - 1));
    }
}

echo factorial(4);