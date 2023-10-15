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
	 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script>src="./js/bootstrap.bundle.min.js"</script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="icon" href="/path-to-your-favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="container">
      <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_chienes.php" >Chinese Food</a></button><br>
         <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_korean.php" > Korean  Food</a></button><br>
            <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_japanese.php" >Japanese Food</a></button><br>
             <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="french_korean.php" > French Food</a></button><br>
         <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_spanish.php"> Spanish  Food</a></button><br>
            <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_italian.php" >Italian Food</a></button><br>
              <button class="btn btn-info  mt-5 px-5 ml-5"><a class="text-white" href="insert_traditional.php" >Traditional Food</a></button><br>
            
           
      </div>
</body>
</html>