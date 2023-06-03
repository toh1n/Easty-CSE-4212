<?php
    include 'config.php';
    $id=$_GET['id'];
    $delete_query="DELETE FROM `crud` WHERE id='$id'";
    if(mysqli_query($conn,$delete_query)){
    echo "<script>'alert('Deleted Suceccfully!!')'</script>";
    header("location:addProduct.php");//redirect korar jono
    }
    else{
    echo "<script>'alert('Not Deleted Suceccfully!!')'</script>";
    }?>
