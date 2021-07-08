<?php
$hostname     = "";  //add your server name here
$Username     = "";  //add your username here
$Password     = "";  //add your password here
$databasename = "";  //add your database name here
// Create connection 
$conn = new mysqli($hostname, $Username, $Password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>
