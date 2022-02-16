<?php 

$conn = mysqli_connect("localhost", "root","","test") or die("Connection Failed");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Failed");

//$row = mysqli_fetch_assoc($result);
//$row = mysqli_fetch_row($result);
//$row = mysqli_fetch_array($result,MYSQLI_BOTH);
//$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
//$row = mysqli_fetch_field($result);


// while($row = mysqli_fetch_field($result)) {
//     echo "<pre>";

//     print_r($row);
   
//     echo "</pre>";
// }
while($row = mysqli_fetch_field($result)) {
   

    echo $row->name."<br>";
   
    
}



// while($row = mysqli_fetch_assoc($result)){
//     echo $row['first_name']."".$row['last_name'] . "<br>";
// }

// while($row = mysqli_fetch_row($result)){
//      echo $row[1]."".$row[2] . "<br>";
//  }

// while($row= mysqli_fetch_array($result)) {
//     echo $row['1']."<br>";
// }


// foreach($row as $data) {
//     echo $data['id']." ".$data['first_name']." ".$data['last_name'] . "<br>";
// }




?>