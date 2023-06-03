<?php

include "config.php";
session_start();
if (isset($_POST['saveProfile'])) {
    // Retrieve form values
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $userName = $_POST['userName'];

    // Validate for null values
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($address) || empty($userName)) {
        echo "<script>alert('Can not be empty')</script>";
        header("Location: edit_profile.php");
        exit();
    }
    if ($_SESSION['firstName'] === $firstName && $_SESSION['lastName'] === $lastName && $_SESSION['email'] === $email && $_SESSION['phone'] === $phone && $_SESSION['address'] === $address && $_SESSION['userName'] === $userName) {
        // Redirect to the profile page
        header("Location: profile.php");
        exit();
    }

    // Prepare and execute the SQL query
    $sql = "UPDATE userBase SET
            firstName = ?,
            lastName = ?,
            email = ?,
            mobile = ?,
            address = ?
            WHERE userName = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $address, $userName);
    $stmt->execute();

    // Check for successful update
    if ($stmt->affected_rows > 0) {
        session_reset();
        session_start();
        // Update session values
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;
        $_SESSION['userName'] = $userName;

        // Redirect to a success page or any other desired location
        header("Location: profile.php");
        exit();
    } else {
        // Handle update error
        $error = "Failed to update profile. Please try again.";
    }

    $stmt->close();
}

$conn->close();
?>
