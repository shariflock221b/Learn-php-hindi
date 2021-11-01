<?php

// $colors = ["red", "green", "Blue", "Yellow"];

// $colors = [

//      "red" => 1,
//      "green" => 2,
//      "Blue" => 3,
//      "Yellow" => 4
// ];


// foreach($colors as $key => $value) {
//     echo $key . " = ". $value . " <br>";
//     echo  $key . " = ". $value . " <br>";
// }


// for($i = 0; $i < 4; $i++) {
//     echo $colors[$i] . "<br>";
// }


$emp = [
    [1, "lol-1", "manger", 50000],
    [2, "lol-2", "manger", 10000],
    [3, "lol-3", "manger", 40000],
    [4, "lol-4", "manger", 20000],
    [5, "lol-5", "manger", 70000]
];




echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Designation</td>
        <td>Salary</td>
    
    </tr>

";
foreach ($emp as list($id, $name, $designation, $salary)){
    echo "<tr><td>$id</td><td>$name</td><td> $designation</td><td>$salary</td></tr>  <br>";
}
echo "</table>";