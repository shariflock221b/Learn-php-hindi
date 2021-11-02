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

$color = array('red', 'green', 'yellow', 'pink', 'line');
$col = array('lol-1', 'lol-2');
// $newArray = array_slice($color, 1, 3);
// $newArray = array_slice($color,  -1);
array_splice($color, count($color), 2, $col );

echo "<pre>";
print_r($color);
echo "</pre>";