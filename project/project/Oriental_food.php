  <?php
// 1. db connect 

include ("db_conection.php");
$slelect_query = "SELECT * FROM chinese_food";

$result = $conn->query($slelect_query);
$row = $result->fetch_assoc()


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
  <h2><b><i>chinese Food</i></b></h2>
</div></div>

  <!-- categories start -->
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (2).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <p class="card-text"> <?php echo $row["price"]; ?></p>
                <a href="Go_somewhere.php" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
      
          <!-- Repeat the above card code three more times for a total of four cards -->
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
                    <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="DesiDawat.jpg" alt="DesiDawat.jpg">
              <div class="card-body">
                <h5 class="card-title">Traditional food</h5>
                <p class="card-text">2) Chaat. ...
                  3) Dal makhani. 
              </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
        <div class="container pt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (2).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <p class="card-text"> <?php echo $row["price"]; ?></p>
                <a href="Go_somewhere.php" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
      
          <!-- Repeat the above card code three more times for a total of four cards -->
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
                    <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="DesiDawat.jpg" alt="DesiDawat.jpg">
              <div class="card-body">
                <h5 class="card-title">Traditional food</h5>
                <p class="card-text">2) Chaat. ...
                  3) Dal makhani. 
              </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
        <div class="container pt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (2).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <p class="card-text"> <?php echo $row["price"]; ?></p>
                <a href="Go_somewhere.php" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
      
          <!-- Repeat the above card code three more times for a total of four cards -->
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
                    <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="slider (1).jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Continental food</h5>
                <p class="card-text"> Dishes of French, Spanish and Italian cuisine fall under the category of ‘Continental food’. </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="DesiDawat.jpg" alt="DesiDawat.jpg">
              <div class="card-body">
                <h5 class="card-title">Traditional food</h5>
                <p class="card-text">2) Chaat. ...
                  3) Dal makhani. 
              </p>
                <a href="#" class="btn btn-primary">Order Now</a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>