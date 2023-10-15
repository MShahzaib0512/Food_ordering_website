<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		
</head>
<body>
<?php
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$id = $_POST['id'];
// 2. php connect to DB
include ("db_conection.php");



$sql_query = "UPDATE chinese_food SET price = '1 pate 300 Rsupees' WHERE id ='&id'";

if ($conn->query($sql_query) === TRUE) {
echo '<script type="text/javascript">alert("Record updated sucess fully");</script>';
} 
else {
  echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
// 4. confirmation message

?>
</body>
</html>