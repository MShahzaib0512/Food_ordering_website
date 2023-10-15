<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript">
		jsfunction(){
			alert('Record added sucessfully')
		}
	</script>
</head>
<body>
<?php
if(isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
 // $image = $_POST['image'];
// $id = $_POST['id'];
// 2. php connect to DB
include ("db_conection.php");

$sql_query = "UPDATE food_order SET name= '$name', phone = '$phone', item = '$item', quantity = '$quantity', address = '$address' WHERE id ='$id'";

if ($conn->query($sql_query) === TRUE) {
  echo jsfunctoin();
} 
else {
  echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
// 4. confirmation message
}
?>
</body>
</html>