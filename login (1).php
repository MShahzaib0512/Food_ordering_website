<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$servername = "localhost";
         $user = "root";
          $db_password = "";
           $db = "mamona";
// Create connection
$conn = new mysqli($servername, $user, $db_password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// print_r($_POST);
if (isset($_POST['post'])) {
        $fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mail=$_POST['mail'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$country=$_POST['country'];
	}	
	$insert_query = "INSERT INTO login (id,  fname, lname, mail, phone, password, country) VALUES (NULL, '$fname', '$lname', '$mail', $phone', '$password', 'country');";

if ($conn->query($insert_query) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $insert_query . "<br>" . $conn->error;
}

$conn->close();

	?>

</body>
</html>