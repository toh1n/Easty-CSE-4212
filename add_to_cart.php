<?php
include "config.php";
session_start();

if (isset($_GET['product_id'])) {
  $productId = $_GET['product_id'];
  
  $userName = $_SESSION['userName'];

  $stmt = $conn->prepare("SELECT * FROM crud WHERE id = ?");
  $stmt->bind_param("s", $productId);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Login successful

    $productName = $row["name"];
    $price = $row["price"];
    $image = $row["image"];
  }


  // Insert the product into the cart table
  $sql = "INSERT INTO cart (cartOwner, productId, name,price,image) VALUES ('$userName', '$productId','$productName','$price','$image')";
  
  // Execute the query
  if ($conn->query($sql) === TRUE) {
    header("location:index.php");//redirect korar jono

  } else {
    echo "Error adding product to cart: ";
  }
} else {
  echo "Invalid product ID.";
}

// Close the connection
$conn->close();
?>
