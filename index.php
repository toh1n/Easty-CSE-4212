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
            <a class="nav-link" href="index.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Contact Us</a>
          </li>
          <?php
          // Check if user is logged in (you should have your own authentication logic here)
          $isLoggedIn = false; // Set to true if user is logged in
          
          if ($isLoggedIn) {
            // Display "Profile" instead of "Login" and "Register" if user is logged in
            echo '
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
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


  <div class="banner">
    <div class="banner-content">
      <h1>UP TO 50% OFF!!!</h1>
      <h1>Best Deals!</h1>
    </div>
  </div>


  <div class="container">
    <h1 class="text-center" style="margin-top:30px;">PRODUCTS</h1>
    <?php
    // Assuming you have a MySQL connection established
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_shop";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM crud";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<div class="row" style="margin-top:20px">'; // Open the row container
      while ($row = $result->fetch_assoc()) {
        $image = $row['image'];
        $name = $row['name'];
        $price = $row['price'];
        ?>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="<?php echo $image; ?>" alt="" class="card-image-top">
            <div class="card-body">
              <h5 class="card-titel text-center">
                <?php echo $name; ?>
              </h5>
              <p class="text-center">$
                <?php echo $price; ?>
              </p>
              <div class="star text-center">
                <i class='bx bxs-star checked'></i>
                <i class='bx bxs-star checked'></i>
                <i class='bx bxs-star checked'></i>
                <i class='bx bxs-star checked'></i>
                <i class='bx bxs-star checked'></i>
              </div>
              <div id="btn2">
                <button>Add Cart</button>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      echo '</div>'; // Close the row container
    } else {
      echo "No products found.";
    }

    // Close the connection
    $conn->close();
    ?>
  </div>


  <section class="newsletter-w3pvt py-5">
    <div class="container py-md-5">
      <form method="post" action="#">
        <p class="text-center">Subscribe To The Easty Store For Latest Update.</p>
        <div class="row subscribe-sec">
          <div class="col-md-9">
            <input type="email" class="form-control" placeholder="Enter Your Email.." name="email">

          </div>
          <div class="col-md-3">

            <button type="submit" class="btn subscribe">Subscribe</button>
          </div>

        </div>
      </form>
    </div>
  </section>

  <div class="container">
    <h1>Contact :</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="usr" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="eml" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="phn" placeholder="Phone">
        </div>
        <div id="btn1"><button>Send Message</button></div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <textarea class="form-control" id="comment" rows="5"></textarea>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <div class="container">
    <h1>About Us</h1>
    <p>Welcome to Easty, your one-stop destination for convenient and enjoyable online shopping. 
    With a wide selection of high-quality products, exceptional customer service, 
    and a user-friendly website, we strive to exceed your expectations. 
    We partner with trusted vendors, prioritize sustainability, and value your feedback. 
    Join us on this exciting journey and experience the ease and variety that Easty brings to your online shopping experience. 
    Happy shopping from the Easty Team!</p>

  </div>
  <hr>



  <div class="container">
    <div class="row -grids-footer border-top border-bottom py-sm-4 py-3" style="margin-top: 100px;">
      <div class="col-md-4 offer-footer">
        <div class="row">
          <div class="col-4 icon-fot">
            <i><img src="img/free-shipping.png" alt="" width="70px"></i>
          </div>
          <div class="col-8 text-form-footer">
            <h3>Free Shipping</h3>
            <p>on orders over $100</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 offer-footer my-md-0 my-4">
        <div class="row">
          <div class="col-4 icon-fot">
            <i><img src="img/fast-delivery.png" alt="" width="70px"></i>
          </div>
          <div class="col-8 text-form-footer">
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 offer-footer">
        <div class="row">
          <div class="col-4 icon-fot">
            <i><img src="img/like.png" alt="" width="70px"></i>
          </div>
          <div class="col-8 text-form-footer">
            <h3>Big Choice</h3>
            <p>of Products</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-center text-white">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023
      <a class="text-white" href="#">Mazharul Islam Tohin</a>
    </div>
  </footer>

  <a class="arrow" href="#"><i><img src="img/arrow.png" alt=""></i></a>

  </head>
</body>