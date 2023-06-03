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
    <title>Food Menu</title>
</head>

<body>
    <!-- <h1 class=align-center>CURD</h1> -->
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insertIntoDB.php" method="post" enctype="multipart/form-data">
                    <div clas="mb-3">
                        <h3 class="text-center">Add Food:</h3>
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
                        <input type="submit" class="btn btn-primary col-12" name="addFood" value="Add Food">
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