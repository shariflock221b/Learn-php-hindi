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


echo "<table border='2px' cellpadding='5px' cellspacing='0'>


    <tr>
        <th>Emp ID.</th>
        <th>Emp Name.</th>
        <th>Emp Designation.</th>
        <th>Emp Salary.</th>
    </tr>


";



foreach($emp as $v1) {
    echo "<tr>";
    foreach($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";



$marks = [

     "Khairul" => [
        "Bangla" => 90,
        "English" => 80,
        "Math" => 80
     ],
     "Alom" => [
        "Bangla" => 40,
        "English" => 60,
        "Math" => 70
     ],
     
     "Monjor" => [
        "Bangla" => 90,
        "English" => 40,
        "Math" => 90
     ],
     
     

];


echo "<table border='2px' cellpadding='5px' cellspacing='0'>

    <tr>
        <th>Student Name.</th>
        <th> Bangla.</th>
        <th> English.</th>
        <th>Math</th>
    
    </tr>


";

foreach ($marks as $key => $v1){

        echo " <tr>

        <td> $key </td>";

        foreach ($v1 as $v2) {
            echo "<td> $v2 </td>";
        }

        echo "</tr>";
}

echo "</table>";





