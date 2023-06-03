<?php
session_start();
if(isset($_SESSION["userName"]))
{
    header("Location: index.php");
}else{
    
    echo "<script>alert('Login First')</script>";
    header("Location: index.php");
}
?>