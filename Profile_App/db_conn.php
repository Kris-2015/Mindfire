<?php

$hostname = "localhost";
$username = "root";
$pass     = "mindfire";
$db_name  = "employee";


// Create connection

$conn = mysqli_connect($hostname, $username, $pass, $db_name);

// Check connection

if (!$conn) {
    die("Connection failed:" . mysqli_error());
}
//echo "Connected Successfully";

?>