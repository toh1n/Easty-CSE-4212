<?php
include "config.php";
session_start();


if (isset($_POST['login'])) {

  $r_username = $_POST['r_userName'];
  $r_pass = $_POST['r_pass'];

  $stmt = $conn->prepare("SELECT * FROM userbase WHERE userName = ? AND pass = ?");
  $stmt->bind_param("ss", $r_username, $r_pass);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["isLoggedIn"] = true;
    
    $_SESSION["firstName"] = $row["firstName"];
    $_SESSION["lastName"] = $row["lastName"];
    $_SESSION["userName"] = $row["userName"];
    $_SESSION["phone"] = $row["mobile"];
    $_SESSION["email"] =  $row["email"];
    $_SESSION["address"] = $row["address"];

    
    header("Location: index.php");
  } else {
    echo "Invalid email or password.";
  }

  $stmt->close();

}

?>