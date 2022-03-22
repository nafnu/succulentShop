<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpstore";  //I need to change the name of the data

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


?>
