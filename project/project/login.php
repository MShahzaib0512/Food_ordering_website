<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	if (isset($_POST['submit'])) {
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

 // print_r($_POST);
    $fname=$_POST['username'];
		$mail=$_POST['mail'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
	
	 $insert_query = "INSERT INTO login (id, username, email, phone, password) VALUES (NULL, '$fname', '$mail', '$phone', '$password');"; 

if ($conn->query($insert_query) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $insert_query . "<br>" . $conn->error;
}

$conn->close();

}	

	?>

</body>