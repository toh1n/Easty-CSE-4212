<?php 

	require 'config.php';


	$row = db_query("select * from users where id = :id limit 1",['id'=>$id]);

?>


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

<?php if(!empty($row)):?>
    <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
        <div class="col-md-4 text-center">
            <img src="" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
            <div>

                <?php if(user('id') == $row['id']):?>

                    <a href="profile-edit.php">
                        <button class="mx-auto m-1 btn-sm btn btn-primary">Edit</button>
                    </a>
                    <a href="profile-delete.php">
                        <button class="mx-auto m-1 btn-sm btn btn-warning text-white">Delete</button>
                    </a>
                    <a href="logout.php">
                        <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
                    </a>
                <?php endif;?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">User Profile</div>
            <table class="table table-striped">
                <tr><th colspan="2">User Details:</th></tr>
                <tr><th><i class="bi bi-envelope"></i> Email</th><td><?=esc($row['email'])?></td></tr>
                <tr><th><i class="bi bi-person-circle"></i> First name</th><td><?=esc($row['firstname'])?></td></tr>
                <tr><th><i class="bi bi-person-square"></i> Last name</th><td><?=esc($row['lastname'])?></td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td><?=esc($row['gender'])?></td></tr>
            </table>
        </div>
    </div>
<?php else:?>
    <div class="text-center alert alert-danger">That profile was not found</div>
    <a href="index.php">
        <button class="btn btn-primary m-4">Home</button>
    </a>
<?php endif;?>

</body>

</html>