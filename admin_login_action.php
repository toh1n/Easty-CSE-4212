<?php
include "config.php";
session_start();


if (isset($_POST['login'])) {

  $r_username = $_POST['r_userName'];
  $r_pass = $_POST['r_pass'];

  // Prepare the query to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM adminBase WHERE userName = ? AND pass = ?");
  $stmt->bind_param("ss", $r_username, $r_pass);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Login successful
    $_SESSION["isLoggedIn"] = true;
    $_SESSION["name"] = $row["name"];
    $_SESSION["userName"] = $row["userName"];
    $_SESSION["email"] =  $row["email"];
    header("Location: addProduct.php");
  } else {
    // Login failed
    echo "Invalid email or password.";
  }

  $stmt->close();

}

?>