<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_shop";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
// if (!$conn) {
//     die("connection Failed :" . mysqli_connect_error());
// } else {
//     echo "<script>alert('Connected with DB successfully!!')</script>";
// } 
?>