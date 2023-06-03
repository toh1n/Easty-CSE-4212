<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        form {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Edit Profile</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="img/user.jpg" width="90">
                <span class="font-weight-bold">
                    <?php echo $_SESSION['firstName']; ?>
                </span>
                <span class="text-black-50">
                    <?php echo $_SESSION['email']; ?>
                </span>
                <span>
                    <?php echo $_SESSION['address']; ?>
                </span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back">
                        <i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Edit Profile</h6>
                    </div>
                </div>

                <form action="update_profile.php" method="POST">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" name="firstName"
                                value="<?php echo $_SESSION['firstName']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['lastName']; ?>"
                                placeholder="Last Name" name="lastName">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="<?php echo $_SESSION['email']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['phone']; ?>"
                                placeholder="Phone Number" name="phone">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                value="<?php echo $_SESSION['address']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['userName']; ?>"
                                placeholder="User Name" name="userName">
                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <button class="btn btn-primary profile-button" type="submit" name="saveProfile">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>