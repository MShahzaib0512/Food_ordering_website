<?php

$servername = "localhost";
$user = "root";
$db_password = "";
$db = "foodorder";

// Create connection
$conn = new mysqli($servername, $user, $db_password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>