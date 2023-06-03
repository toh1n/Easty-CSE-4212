<?php
include 'config.php';
if (isset($_POST['updateFood'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageLocalLocation = "pic/$imageName";
    move_uploaded_file($imageTempLocation, $imageLocalLocation);
    $updateFoodQuery = "UPDATE `crud` SET `name`='$name', `price`='$price',
    `image`='$imageLocalLocation' WHERE ID='$id'";
    if (!mysqli_query($conn, $updateFoodQuery)) {
        echo "<script>alert('not inserted')</script>";
    } else {
        echo "<script>alert('Successfully inserted')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}