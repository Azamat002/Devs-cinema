
<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="shortcut icon" href="images/DC-logo-small-cut-white.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="index.js"></script>

</head>
<body>

<nav>
    <label class="logo">Devs Cinema</label>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
</nav>
<section>
    <h2>Hello to our HOME page!</h2>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['email'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

</section>

</body>
</html>