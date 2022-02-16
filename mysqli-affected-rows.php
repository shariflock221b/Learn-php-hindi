<?php 

$conn = mysqli_connect("localhost", "root","","test") or die("Connection Failed");
$sql = "SELECT * FROM students";
// $sql = "UPDATE students SET last_name = '' WHERE last_name = ''";
// $sql = "DELETE FROM  students WHERE id > 2";
$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total Rows: " . mysqli_affected_rows($conn);


?>