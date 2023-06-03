<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        form {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Admin Panel</title>
</head>

<body>
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
            <?php
          session_start();
          
          if (isset($_SESSION["isLoggedIn"]) == true) {
            $_userName = $_SESSION["userName"];
            echo '
            <li class="nav-item">
              <a class="nav-link" href="profile.php"> Logged in as '. $_userName .'</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="log_out_action.php">Log Out</a>
            </li>
          ';
          } else {
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


    <!-- <h1 class=align-center>CURD</h1> -->
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insertIntoDB.php" method="post" enctype="multipart/form-data">
                    <div clas="mb-3">
                        <h3 class="text-center">Add Product:</h3>
                    </div>
                    <div class="mb-3">
                        ID:<input type="text" class="form-control" name="id">
                    </div>
                    <div class="mb-3">
                        Name:<input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        Price:<input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        Image:<input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary col-12" name="addFood" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Table Code -->
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </thead>
            <body>
          <?php
            include 'config.php';
            $allData=mysqli_query($conn,"SELECT * FROM `crud`");
            while($row=mysqli_fetch_array($allData)){
            echo "<tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td><img src='$row[image]' width='100px'></td>
            <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</td>
            <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</td>
            </tr>"; }
          ?>
      </body>

        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    
</body>

</html>