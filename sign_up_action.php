<?php
include 'config.php';
if (isset($_POST['signUp'])) {
    $r_firstName = $_POST['r_firstName '];
    $r_lastName = $_POST['r_lastName '];
    $r_username = $_POST['r_userName'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
    $r_mobile = $_POST['r_mobile'];
    $r_address = $_POST['r_address'];
}
$insert_query = "INSERT INTO userBase (`firstName`, `lastName`, `userName`, `email`, `pass`, `mobile`, `address`)
VALUES ('$r_firstName', '$r_lastName', '$r_username', '$r_email', '$r_pass', '$r_mobile', '$r_address')";
if (!mysqli_query($conn, $insert_query)) {

    echo "<script> alert('not inserted')</script>";
} else {
    echo "<script> alert('successfully inserted')</script>";
    echo "<script> location.href='login.php'</script>";
}

// $mobilepattern = "/(\+88) ?01 [3-9]\d{8}/";
// // echo "<script> location.href=' signUp.php'</script>";
// $duplicate_username = mysqli_query($conn, "SELECT * FROM `userBase` WHERE username='$r_username'");
// if (strlen($r_username) < 3 || strlen($r_username) > 20) {
//     echo "<script> alert('Username length 3-20')</script>";
//     echo "<script> location.href=' signUp.php'</script>";
// } else if (!preg_match($mobilepattern, $r_mobile)) {
//     echo "<script> alert('Mobile Number format is invalid')</script>";
//     echo "<script> location.href=' signUp.php'</script>";

// } else if ($r_con_pass != $r_pass) {
//     echo "<script> alert('Password dont match')</script>";
//     echo "<script> location.href=' signUp.php'</script>";
// } else if (mysqli_num_rows($duplicate_username) > 0) {
//     echo "<script> alert('Username has already taken')</script>";
//     echo "<script> location.href=' signUp.php'</script>";
// } else {
//     if (!mysqli_query($conn, $insert_query)) {

//         echo "<script> alert('not inserted')</script>";
//     } else {
//         echo "<script> alert('successfully inserted')</script>";
//         echo "<script> location.href='login.php'</script>";
//     }
// }
?>