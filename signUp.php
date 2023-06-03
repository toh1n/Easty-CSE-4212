<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Bootstrap Simple Login Form with Blue Background</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        .form-button {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 5vh; */
            /* Optional - adjust the height as needed */
        }

        body {
            color: #fff;
            background: #3598dc;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            height: 41px;
            background: #f2f2f2;
            box-shadow: none !important;
            border: none;
        }

        .form-control:focus {
            background: #e2e2e2;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 400px;
            margin: 30px auto;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }

        .signup-form hr {
            margin: 0 -30px 20px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }

        .signup-form .row div:first-child {
            padding-right: 10px;
        }

        .signup-form .row div:last-child {
            padding-left: 10px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #0e7C61;
            border: none;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #0e7C61 !important;
            outline: none;
        }

        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #0e7C61;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }

        .signup-form .hint-text {
            padding-top: 0px;
            padding-bottom: 5px;
            text-align: center;
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

    <div class="signup-form">
        <form action="sign_up_action.php" method="post">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="r_firstName" placeholder="First Name"
                            required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="r_lastName" placeholder="Last Name"
                            required="required"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="r_userName" placeholder="User Name" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="r_email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="phone" class="form-control" name="r_mobile" placeholder="Phone Number" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="r_address" placeholder="Address" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="r_pass" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="r_con_pass" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="signUp">Sign Up</button>
        </div>
            <div class="hint-text">Already have an account? <a href="login.php">Login</a></div>
        </form>

    </div>
</body>

</html>