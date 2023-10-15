<?php 
	include ("db_conection.php");
if(isset($_POST['submit'])){
   session_start();
// print_r($_POST);

$username= $_POST['username'];
$password = $_POST['password'];

// include ("db_conection.php");
 $slelect_query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($slelect_query);
echo "hello";
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
<html lang="en">

<head>
    <title>login page</title>
    <style>
        .box {
            width: 75%;
            margin: 40px auto;
            display: flex;
            box-shadow: 5px 5px 30px ;
        }
    

        .box1 {
           
            width: 50%;
            height: 600px;
            background-color:  #17a2b8;
        }

        .box2 {
            
            width: 50%;
            height: 100%;
            background-color: rgb(249, 249, 249);
        }

        .sign-details {
            padding: 60px;
        }
        .inp{
            border: none;
            background-color: transparent;
            border-bottom: 2px solid rgb(170, 168, 168);
            padding: 10px;
            width: 70%;
            outline: none;
        }
        .green{
            background-color:  #17a2b8;
            border-radius: 15px;
            padding: 10px 50px;
            color: white;
            border: none;
        }
        /* for mobile */
        @media screen and (max-width :778px) {
            
            .box {
            width: 80%;
            padding: 60px;
            display: flex;
            flex-direction: column;
            /* box-shadow: 2px 2px ; */
        }

        
        .box1 {
           height: 50vh;
           width: 100%;
       }
       .box2 {
            
            width: 100%;
            
        }

       .inp{
           width: 80%;
       }
    
        }
    </style>
</head>

<body>
    <div>
        <!-- signup section start -->
        <div class="box">
            <form action class="box1">
                <h1 style="color: white; margin-top: 120px; font-size: 50px" align="center">
                    <b>Login</b>
                </h1>
                <p style="color: white; font-size: 15px; margin-top: -20px" align="center">
                    to use all features of the application
                </p>
                <img style="margin-left: 182px; margin-top: 200px" width="130px"
                    src="./Eo_circle_green_white_checkmark.svg.png" alt />
            </form>

            <!-- login section start -->
            <div class="box2">
                <div class="sign-details">
                    <form  action="dashboard.php" method="post">
                        <div >
                        <label for>USERNAME</label><br>
                        <br />
                        <input class="inp" type="text" name="username" required placeholder="Enter Username" /><br>
                       
                        <label for>PASSWORD</label><br>
                        <br />
                        <input class="inp" type="password" name="password" required placeholder="Enter Password" /><br>
                        <br>
                       
                            <input type="submit" name="submit" class="green" value="submit"> 
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      <div style="color: red;"> <?php if (isset($message)) echo $message; ?> </div> 
 </form>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</body>
</html>