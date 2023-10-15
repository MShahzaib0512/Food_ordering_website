<?php 
	session_start();
include ("db_conection.php");
if(isset($_POST['submit'])){
  
print_r($_POST);

$username= $_POST['username'];
$password = $_POST['password'];

 $slelect_query = "SELECT * FROM employee WHERE user_name ='$username' AND password ='$password'";
$result = $conn->query($slelect_query);

                  echo "helo";
    if ($result->num_rows > 0){
            // redirect to dashboard page
            $_SESSION["islogin"] = "true";

            header('Location: dashboard-admin.php');
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
	<style type="text/css">
		body{
        display: flex;
          justify-content: center;
          align-items: center;
          min-height: 200vh;

    }
#rcorners {
  border-radius: 50px;
  border: 2px solid ;
  padding: 20px;
  width: 200px;
  height: 10px;
}
input[type=submit]{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
#style {
    min-height: 500px;
    align-self: center;
    background-color: seagreen;
   border-radius: 10px;
  border: 2px solid ; 
  padding: 20px;
  justify-content: center;
  align-content: center;
  align-items: center;
}
.box{

}
.box .icon{
    position: absolute;
    right: 20px;
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
    <h1 align="center"><b>Login</b></h1>
        <div  align="left" class="box" width="30%">
           <label align=""><h3>Username:</h3></label>
           <input id="rcorners" type="text" name="username" size="20">
    </div>
    <div align="left" class="box" width="30%">
           <label align=""><h3>password:</h3></label>
           <span class="icons"><ion-icon name="mail"></ion-icon></span>
           <input id="rcorners" type="password" name="password" size="20" required>
    </div><br>
     <input type="submit" name="submit" value="submit">
      <div style="color: red;"> <?php if (isset($message)) echo $message; ?> </div> 
 </form>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</body>
</html>