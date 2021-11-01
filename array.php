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


$emp = [
    [1, "lol-1", "manger", 50000],
    [2, "lol-2", "manger", 10000],
    [3, "lol-3", "manger", 40000],
    [4, "lol-4", "manger", 20000],
    [5, "lol-5", "manger", 70000]
];

// for($row = 0; $row < 4; $row++){
//     for($col = 0; $col < 4; $col++){
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

echo "<th>Emp ID.</th>";
echo "<th>Emp Name.</th>";
echo "<th>Emp Designation.</th>";
echo "<th>Emp Salary.</th>";

foreach($emp as $v1) {
    echo "<tr>";
    foreach($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";