<?php
// $colors = ["red", 20, "blue", 12.30, "green", 30.30];
// echo $colors[1];
// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// for($i = 0; $i < 4; $i++){
//     echo  $colors[$i] . "<br>";
// }

// $age = [
//     "bill" => 25,
//     "stev" => 28,
//     "elon" => 22
// ];


// echo "<pre>";
// print_r($age);
// var_dump($age);
// echo "</pre>";

// echo $age ["bill"];


// $emp = [
//     [1, "lol-1", "manger", 50000],
//     [2, "lol-2", "manger", 10000],
//     [3, "lol-3", "manger", 40000],
//     [4, "lol-4", "manger", 20000],
//     [5, "lol-5", "manger", 70000]
// ];

// for($row = 0; $row < 4; $row++){
//     for($col = 0; $col <pre 4; $col++){
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }


// echo "<table border='2px' cellpadding='5px' cellspacing='0'>


//     <tr>
//         <th>Emp ID.</th>
//         <th>Emp Name.</th>
//         <th>Emp Designation.</th>
//         <th>Emp Salary.</th>
//     </tr>


// ";



// foreach($emp as $v1) {
//     echo "<tr>";
//     foreach($v1 as $v2) {
//         echo "<td> $v2 </td>";
//     }
//     echo "</tr>";
// }

// echo "</table>";



// $marks = [

//      "Khairul" => [
//         "Bangla" => 90,
//         "English" => 80,
//         "Math" => 80
//      ],
//      "Alom" => [
//         "Bangla" => 40,
//         "English" => 60,
//         "Math" => 70
//      ],
     
//      "Monjor" => [
//         "Bangla" => 90,
//         "English" => 40,
//         "Math" => 90
//      ],
     
     

// ];


// echo "<table border='2px' cellpadding='5px' cellspacing='0'>

//     <tr>
//         <th>Student Name.</th>
//         <th> Bangla.</th>
//         <th> English.</th>
//         <th>Math</th>
    
//     </tr>


// ";

// foreach ($marks as $key => $v1){

//         echo " <tr>

//         <td> $key </td>";

//         foreach ($v1 as $v2) {
//             echo "<td> $v2 </td>";
//         }

//         echo "</tr>";
// }

// echo "</table>";


// In-Array

// $foods = array('orange', 'mango' ,'apple', 44, 'banana');

// // echo in_array('orange', $foods);

// if(in_array(44, $foods, true)){
//     echo "Find Successfully";
// }else {
//     echo "Not Find";
// }



// Array Search 

// $foods = array('orange', 'mango' ,'apple', 44, 'banana');

// echo array_search('apple', $foods);



// $foods = array( 'a' => 'orange', 'b'=> 'mango' ,'c'=> 'apple','d'=> 'banana');

// echo array_search('apple', $foods);



// // $colors = array('red', 'green', 'yellow', 'pink');

// $veggi = array('carron', 'mula', 'mink');

// $lol = array('sharif', 'laila', 'amin');

// $newArray = array_replace($colors, $veggi, $lol);

// echo "<pre>";
// print_r($newArray) ;

// echo "</pre>";

// $color = ['1' => 'red', 'a' => 'green', '3' => 'yellow'];

// $fol = ['1' => 'orange ', 'a' => 'banana', '3' => 'lol'];

// $nowAarray = array_replace_recursive($color, $fol);

// echo "<pre>";
// print_r($nowAarray);
// echo "</pre>";

// // Array pop/push

// $olors = array('red', 'green', 'yellow', 'pink');

// // array_pop($olors);


// array_push($olors, "olvile", "nice");



// echo "<pre>";
// print_r($olors);
// echo "</pre>";

 
// arry shift / unshift


// $lors = array('red', 'green', 'yellow', 'pink');

//  //array_shift($lors);


// array_unshift($lors, "olvile", "nice");


// echo "<pre>";
// print_r($lors);
// echo "</pre>";


// Array merge and array combaine

// $lol1 = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];
// $lol2 = ['sharif', 'malin', 'lol'];
// $lol3 = ['fahin', 'laki', 'tarek', 'akia', 'rahi'];

// $lol4 = array_merge($lol1, $lol3, $lol2);


// echo "<pre>";
// print_r($lol4);
// echo "</pre>";

// $color = ['a' => 'red', 'b' => 'green', 'c' => 'yellow'];

// $fol = ['b' => 'orange ', 'e' => 'banana'];

// //$lol5 = array_merge($color, $fol);
// $lol5 = array_merge_recursive($color, $fol);


// echo "<pre>";
// print_r($lol5);
// echo "</pre>";


// $lol1 = ['sharif', 'atic', 'majno'];
// $lol2 = [39,58,20];


// $lol5 = array_combine($lol1, $lol2);


// echo "<pre>";
// print_r($lol5);
// echo "</pre>";


// Array slice

// $color = array('red', 'green', 'yellow', 'pink', 'line');
// $col = array('lol-1', 'lol-2');
// // $newArray = array_slice($color, 1, 3);
// // $newArray = array_slice($color,  -1);
// array_splice($color, count($color), 2, $col );

// echo "<pre>";
// print_r($color);
// echo "</pre>";

// $color = array('red', 'green', 'yellow', 'pink', 'line');

// $newArray = array_key_first($color);


// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $lol4 = ['a' => 'yellow', 'b' => 'blue', 'a' => 'red'];

// $lol4 = ['a' => 'red', 'b' => 'blue', 'c' => 'yellow'];

// $now = array_unique($lol4);

// print_r($now);


// ARRAY-FLIP/ARRAY-CHANGE-KEY-CASE

// $lol4 = ['a' => 'yellow', 'b' => 'blue', 'c' => 'red'];

// // $newArray = array_flip($lol4);
// $newArray = array_change_key_case($lol4, CASE_UPPER);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $lol4 = ['a' => '2', 'b' => '5', 'c' => '6'];

// // echo array_sum($lol4);
// echo array_product($lol4);


// $lol1 = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];

// // $newArray = array_rand($lol1);


// $newArray = array_fill_keys($lol1, 'testing');
// // shuffle($lol1);

// // echo "<pre>";
// // print_r($newArray);
// // echo "</pre>";

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// $newArray = array_fill(1, 20, "testing");
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $lol4 = ['a' => 'yellow', 'b' => 'blue', 'c' => 'red'];

// // array_walk($lol4,"myFunc");
// array_walk_recursive($lol4,"myFunc", "new site");


// function myFunc($value, $key, $site){
//     echo " $key $site $value <br>";


// }

// $a = [2, 4, 5, 5, 6,];
// $b = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];

// function square($n, $m) {
//    // return "$n for $m";
//     //return [$n => $m];
//     // return strtoupper($n);
// }

// //$newArray = array_map('square', $a, $b);
// $newArray = array_map('square', $b);



// echo "<pre>";
// print_r($newArray);
// echo "</pre>";



// $b = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];


// function square($n, $m) {
//     return $n . "-". $m;
    
// }

// //$newArray = array_map('square', $a, $b);
// $newArray = array_reduce( $b, 'square', 39);



// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $nam = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];


// $nam = array(23, 24, 25, 34);

// list($a, $b, $c) = $nam;

// echo $a;


// echo "<b>Current </b>" . current($b) . "<br>";
// echo "<b>Key </b>" . key($b) . "<br>";
// echo "<b>Pos </b>" . pos($b) . "<br>";

// next($b);
// echo "<b>Current </b>" . current($b) . "<br>";
// prev($b);
// echo "<b>Current </b>" . current($b) . "<br>";
// reset($b);
// echo "<b>Current </b>" . current($b) . "<br>";



// //sort( $b);
// rsort( $b);
// ksort( $b);
// array_multisort($b, $c);
// array_reverse($b);



// echo "<pre>";
// print_r($b);
// echo "</pre>";

// $a = 'orange';

// $lol4 = ['a' => 'yellow', 'b' => 'blue', 'c' => 'red'];
// // extract($lol4);
// // extract($, EXTR_OVERWRITE);
// // extract($lol4, EXTR_SKIP);
// extract($lol4, EXTR_PREFIX_SAME, 'test');


// echo "new value a : $a <br>";

// $a = 'shariful';
// $b = 'islam';
// $c = 30;
// $d = 'india';

// $now = ['c', 'd'];

// $newArray = compact('a', 'b', $now);

// print_r($newArray);


// $n = range(2, 200, 20);

// print_r($n);



// $str = 'I am shariful islam , i am a student';

// $newArray = explode(" ", $str, 3);

// echo "<pre>";

// print_r($newArray);

// echo "</pre>";


// $nam = ['sharif', 'atic', 'majno', 'sahin', 'rahman'];

// $now = implode(' ', $nam);

// echo $now;


// $str = "I am sharif";

// // $array = str_split($str);
// $array = chunk_split($str, 3, "...");

// echo "<pre>";

// print_r($array);

// echo "</pre>";

// $lo = "I am shariful islam";

// $nn = strtolower($lo);
// echo $nn;

// $nam = "i am sharif";

// // echo strlen($nam);
// // echo str_word_count($nam);
// // echo substr_count($nam, "i");


// echo strpos($nam, 'am', 2);
 


 $nam = "lo am sharif";

 $find = ['lo', 'am', 'sharif'];
 $replace = ['h', 'ro', 'red'];


 echo str_replace($find, $replace, $nam);