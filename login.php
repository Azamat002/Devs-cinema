<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="images/DC-logo-small-cut-white.svg"/>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset=md-1">
            <div class="row">
                <div class="col-md-5 register-left">
                    <img src="images/DevsCinema-logo-curve.svg">
                    <h3>Login with your email</h3>
                    <p>Sign up our website to complete your order</p>
                    <!--                    <p>if you do not have an account, click here</p>-->
                    <!--                    <a href="registration.html"><button type="button" class="btn btn-primary">Register here</button></a>-->
                </div>
                <div class="col-md-7 register-right">
                    <h2>Login</h2>

                    <div class="register-form">
                        <form method="post" action="login.php">
                            <?php include('errors.php'); ?>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                            <span>
<!--                            <i class="fa fa-eye" id="eye" onclick="showPass()"></i>-->
                            </span>
                        </div>

                        <div class="form-group-bottom">
                            <button type="submit" class="btn btn-primary" name="login_user">Login</button>
                            <p>If you don't have an account,<a href="registration.php">register here</a></p>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="index.js"></script>
</body>
</html>