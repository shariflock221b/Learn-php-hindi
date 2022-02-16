<?php

$conn = mysqli_connect("localhost", "root","","test") or die("Connection Failed: ". mysqli_connect_error()); //mysqli_connect_errno()
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.: ". mysqli_error($conn));//mysqli_error_list()

$str = "";
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name']." ".$row['last_name'] . "<br>";
    }
}



?>