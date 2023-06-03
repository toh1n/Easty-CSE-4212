<?php
session_start();

// Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password are correct (you should replace this with your own authentication logic)
  if ($username === 'admin' && $password === 'password') {
    // Authentication successful
    $_SESSION['isLoggedIn'] = true;
    header('Location: profile.php'); // Redirect to the profile page or any other page
    exit;
  } else {
    // Authentication failed
    $errorMessage = 'Invalid username or password';
  }
// }
?>