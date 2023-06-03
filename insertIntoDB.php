<?php
include 'config.php';

if(isset($_POST['addFood'])){
    $id = $_POST['id'];
    $foodName=$_POST['name'];
    $foodPrice=$_POST['price'];
    $foodImage=$_FILES['image'];



    $imageTempLocation= $_FILES['image']['tmp_name'];
    $imageName= $_FILES['image']['name'];
  
    $imageLocalLocation="pic/".$imageName;
    
    move_uploaded_file($imageTempLocation, $imageLocalLocation);

     $insertFoodQuery="INSERT INTO `crud`(`id`,`name`, `price`, `image`) VALUES ('$id','$foodName','$foodPrice','$imageLocalLocation')";
     if(!mysqli_query($conn,$insertFoodQuery)){
        echo "<script>alert('not inserted')</script>";
     }
    else{
        echo "<script>alert('Successfully inserted')</script>";
         echo "<script>location.href='addProduct.php'</script>";
     }
     }?>