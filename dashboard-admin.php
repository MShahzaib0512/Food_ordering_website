<?php
session_start();
if($_SESSION["islogin"] != "true")
	header('Location: dashboard.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
      <a href="#">show how many people came to our page using login</a>
      <a href="#">rating of our page</a>
</body>
</html>