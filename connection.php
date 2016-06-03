<?php


 $server = "localhost";
$username   = "prodevwebapp";
$password   = "prodevwebapp";
$database	="prodevwebapp";

$conn = mysqli_connect($server, $username, $password, $database);	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>