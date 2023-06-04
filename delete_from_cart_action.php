<?php
    include 'config.php';
    $id=$_GET['id'];
    $delete_query="DELETE FROM `cart` WHERE productId='$id'";
    if(mysqli_query($conn,$delete_query)){
    echo "<script>'alert('Deleted Suceccfully!!')'</script>";
    header("location:cart.php");//redirect korar jono
    }
    else{
    echo "<script>'alert('Not Deleted Suceccfully!!')'</script>";
    }?>