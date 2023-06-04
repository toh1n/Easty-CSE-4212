<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Simple Login Form</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    .login-form {
      width: 340px;
      margin: 50px auto;
      font-size: 15px;
    }

    .login-form form {
      margin-bottom: 15px;
      background: #f2f2f2;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }

    .login-form h2 {
      margin: 0 0 15px;
    }

    .form-control,
    .btn {

      min-height: 38px;
      border-radius: 2px;
    }

    .btn {
      background-color: #0e7C61;
      font-size: 15px;
      font-weight: bold;
    }

    .btn:hover,
    .btn:focus {
      background: #0e7C61 !important;
      outline: none;
    }

    .login-form a {
      color: #0e7C61;
    }
  </style>
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
            <a class="nav-link" href="index.php">HOME</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="login-form">
    <form action="login_action.php" method="post">
      <h2 class="text-center">Log in</h2>
      <div class="form-group">
        <input type="text" class="form-control" name="r_userName" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="r_pass" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
      </div>
      <p class="text-center"><a href="signUp.php">Create an Account</a></p>
      <p class="text-center"><a href="admin_login.php">Login As Admin</a></p>
    </form>
  </div>
</body>

</html>