<!--
Name : Mazharul Islam Tohin
ID : 2012020190
Section : D
Batch : 53rd

-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Easty</title>
    <link rel="shortcut icon" type="image" href="shop.png">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</head>

<body>
    </div>
    <nav class="navbar navbar-expand-md" id="navbar-color">

        <div class="container">
            <a class="navbar-brand" href="#" id="navbar-logo"><i><img src="img/shop.png" alt=""></i>Easty</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span><i><img src="img/menu.png" alt="" width="30px"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                    // Check if user is logged in (you should have your own authentication logic here)
                    session_start();

                    if (isset($_SESSION["isLoggedIn"]) == true) {
                        $_userName = $_SESSION["firstName"];
                        // Display "Profile" instead of "Login" and "Register" if user is logged in
                        echo '
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php"> ' . $_userName . '</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="log_out_action.php">Log Out</a>
            </li>
          ';
                    } else {
                        // Display "Login" and "Register" if user is not logged in
                        echo '
          <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
          ';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <table class="table table-dark table-hover">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>DELETE</th>
            </thead>

            <body>
                <?php
                include 'config.php';
                $cartOwner = $_SESSION["userName"];
                $allData = mysqli_query($conn, "SELECT * FROM `cart` WHERE cartOwner = '$cartOwner'");
                while ($row = mysqli_fetch_array($allData)) {
                    echo "<tr>
            <td>$row[productId]</td>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td><img src='$row[image]' width='100px'></td>
            <td><a class='btn btn-danger' href='delete_from_cart_action.php? id=$row[productId]'>Delete</td>
            </tr>";
                }
                ?>
            </body>

        </table>
    </div>
    
    
    
    <footer class="bg-white text-center text-black">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
            <a class="text-black">Call this 018XXXXXXXX number to book order </a>
        </div>
    </footer>
</body>

</html>