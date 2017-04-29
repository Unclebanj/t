<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpw = "";
$dbname = "cv submission";

$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);

if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}
// $conn-> close(); 
 
?>
