  <?php
// 1. db connect 

include ("db_conection.php");
$slelect_query = "SELECT * FROM french_food";

$result = $conn->query($slelect_query);

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
  <div class="container pt-5">
        <div class="row">
  <h2><b><i>French Food</i></b></h2>
</div></div>

  <!-- categories start -->
<div class="container pt-5">
  <div class="row">
    <?php
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="slider (2).jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["name"]; ?></h5>
              <p class="card-text"><?php echo $row["price"]; ?></p>
              <a href="order_now.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "0 results";
    }
    ?>

  </div>
</div>
  <?php
// 1. db connect 

include ("db_conection.php");
$select= "SELECT * FROM spanish_food";

$result1 = $conn->query($select);

?>
  <div class="container pt-5">
        <div class="row">
  <h2><b><i>Spanish Food</i></b></h2>
</div></div>

  <!-- categories start -->
<div class="container pt-5">
  <div class="row">
    <?php
    if ($result1->num_rows > 0) {
      // output data of each row
      while ($row1 = $result1->fetch_assoc()) {
    ?>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row1["name"]; ?></h5>
              <p class="card-text"><?php echo $row1["price"]; ?></p>
              <a href="order_now.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "0 results";
    }
    ?>

  </div>
</div>
<?php
// 1. db connect 

include ("db_conection.php");
$select= "SELECT * FROM italian_food";

$result1 = $conn->query($select);


?>
  <div class="container pt-5">
        <div class="row">
  <h2><b><i>Italian Food</i></b></h2>
</div></div>

  <!-- categories start -->
<div class="container pt-5">
  <div class="row">
    <?php
    if ($result1->num_rows > 0) {
      // output data of each row
      while ($row1 = $result1->fetch_assoc()) {
    ?>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row1["name"]; ?></h5>
              <p class="card-text"><?php echo $row1["price"]; ?></p>
              <a href="order_now.php" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "0 results";
    }
    ?>

  </div>
</div>

</body>
</html>

      
          