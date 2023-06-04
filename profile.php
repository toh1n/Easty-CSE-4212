

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


    <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
        <div class="col-md-4 text-center">
            <img src="img\user.jpg" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
            <div>

                    <a href="edit_profile.php">
                        <button class="mx-auto m-1 btn-sm btn btn-primary">Edit Info</button>
                    </a>
                    <a href="log_out_action.php">
                        <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
                    </a>

            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">User Profile</div>
            <table class="table table-striped">
                <tr><th colspan="2">User Details:</th></tr>
                <?php 
                session_start();
                $_userName = $_SESSION["firstName"];
                echo '
                <tr><th><i class="bi bi-envelope"></i> First Name</th><td>'.$_SESSION["firstName"].'</td></tr>
                <tr><th><i class="bi bi-person-circle"></i> Last Name </th><td>'.$_SESSION["lastName"].'</td></tr>
                <tr><th><i class="bi bi-person-square"></i> Phone Number </th><td>'.$_SESSION["phone"].'</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Email </th><td>'.$_SESSION["email"].'</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Address</th><td>'.$_SESSION["address"].'</td></tr>  
                <tr><th><i class="bi bi-gender-ambiguous"></i> User Name </th><td>'.$_SESSION["userName"].'</td></tr>    
                '
                ?>
                
            </table>
        </div>
    </div>

</body>

</html>