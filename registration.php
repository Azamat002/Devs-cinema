<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="shortcut icon" href="images/DC-logo-small-cut-white.svg"/>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- site bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"><!-- eye -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>
<body>
<!--    navbar starts here-->
<nav>
    <label class="logo">Devs Cinema</label>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a class="active" href="registration.php">Registration</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset=md-1">
                <div class="row">
                    <div class="col-md-5 register-left">
                        <img src="images/DevsCinema-logo-full.svg">
                        <h3>Welcome</h3>
                        <p>Our pleasure to service you and help to book a seat at your favorite movie</p>
                        <a href="aboutus.php">
                            <button type="button" class="btn btn-primary">About us</button>
                        </a>
                    </div>
                    <div class="col-md-7 register-right">
                        <h2>Registration</h2>

                        <div class="register-form">
                            <form method="post" action="registration.php">
                                <?php include('errors.php'); ?>
                                <div class="form-group">

                                    <input type="text" name="first_name" class="form-control" placeholder="First name"
                                           value="<?php echo $first_name; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name"
                                           value="<?php echo $last_name; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                           value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <!--                            <span class="eye">-->
                                    <!--                            <i class="fa fa-eye"></i>-->
                                    <!--                            <i class="fa fa-eye-slash"></i>-->
                                    <!--                                </span>-->
                                    <input type="password" name="password_1" class="form-control" placeholder="Password"
                                           id="password_1">
                                    <input type="password" name="password_2" class="form-control" placeholder="Confirm password" id="password_2">
                                    <!-- <input type="password" class="form-control password" placeholder="Password" onclick="showPassword()" id="password">-->
                                </div>
                                <div class="form-group-bottom">
                                    <button type="submit" name="reg_user" class="btn btn-primary">Register</button>
                                    <p>If you have an account,<a href="login.php">login here</a></p>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    enf of navbar-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-10 offset=md-1">-->
<!--            <div class="row">-->
<!--                <div class="col-md-5 register-left">-->
<!--                    <img src="images/DevsCinema-logo-full.svg">-->
<!--                    <h3>Welcome</h3>-->
<!--                    <p>Our pleasure to service you and help to book a seat at your favorite movie</p>-->
<!--                    <button type="button" class="btn btn-primary">About us</button>-->
<!--                </div>-->
<!--                <div class="col-md-7 register-right">-->
<!--                    <h2>Registration</h2>-->
<!--                    <div class="register-form">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="First name">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Last name">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="email" class="form-control" placeholder="Email">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="password" class="form-control" placeholder="Password" id="password">-->
<!--                            <span>-->
<!--                            <i class="fa fa-eye" id="eye" onclick="showPass()"></i>-->
<!--                            </span>-->
<!--                            &lt;!&ndash; <input type="password" class="form-control password" placeholder="Password" onclick="showPassword()" id="password">&ndash;&gt;-->
<!--                        </div>-->
<!--                        <div class="form-group-bottom">-->
<!--                            <button type="button" class="btn btn-primary">Register</button>-->
<!--                            <p>If you have an account,<a href="login.php">login here</a></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</div>-->

<script src="index.js"></script>
</body>
</html>