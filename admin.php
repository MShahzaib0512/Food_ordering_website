<?php 
	session_start();
if(isset($_POST['submit'])){


$email = $_POST['email'];
$password = $_POST['password'];

include ("db_conection.php");
 $slelect_query = "SELECT * FROM employee WHERE user_name='$email' AND password='$password'";
$result = $conn->query($slelect_query);

if ($result->num_rows > 0){
echo "helo";
  // redirect to dashboard page
	$_SESSION["islogin"] = "true";

	header('Location: dashboard.php');
  				// echo "user found";
	} 
else {
  $message = "Login info is incorrect. Please try again or contact admin.";
  // show error above login form
	}

$conn->close();

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panel</title>
	<style>
		.phpm{
			width: 60%;
			margin:300px 300px;
			background: #52796f ;
			padding: 50px;
		}
		.input{
			font-weight: bold;
			width: 250px;
			display: block;
			
		}
		tr{
			margin: 10px;
			padding: 8px;
			background: #84a98c;
			color: white;
		}
	</style>
</head>
<body style="background: #cad2c5;">
	<div style="color: red;"> <?php if (isset($message)) echo $message; ?> </div>
	<div class="phpm">
		<form action="admin.php" method="post">
			<table align="center">
				<h2>Verify you are admin</h2>
				<tr><td>Enter user name:</td><td><input class="input" type="text" name="email"></td></tr>
				<tr><td>Enter your password:</td><td><input class="input" type="password" name="password"></td></tr>
				<tr><td colspan="2"><input class="input" type="submit" name="submit" value="submit" style="width: 100%;"></td></tr>
			</table>
		</form>
	</div>

	
</body>
</html>