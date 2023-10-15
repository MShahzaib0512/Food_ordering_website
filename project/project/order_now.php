<?php
// Include the database connection file (db_conection.php)
include("db_conection.php");

// Check if the form is submitted
    //echo "hello";
if(isset($_POST['submit'])) {
    // Retrieve data from the form
    // print_r($_POST);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $item = $_POST['food_item'];
    $address = $_POST['address'];
    $quatity = $_POST['quantity'];

    // Insert data into the database
$insert_query="INSERT INTO food_order (id, name, phone, item, quantity, address) VALUES (NULL, '$name', '$phone', '$item', '$quatity', '$address')";
    if ($conn->query($insert_query) === TRUE) {
        echo "<h3> Thanks for ordering.You will get a message soon.</h3>";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Food Order Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Place Your Food Order</h1>
    
    <form action="order_now.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Delivery Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="food_item">Food Item:</label>
        <input type="text" id="food_item" name="food_item" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <label for="payment_info">Payment Information:</label>
        <input type="text" id="payment_info" name="payment_info" required>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>