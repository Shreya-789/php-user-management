<?php
require_once "settings/config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="firstname" placeholder="First name" required >
        <input type="text" class="login-input" name="lastname" placeholder="Last name" required >       
        <input type="date" class="login-input" name="dob" placeholder="DOB" required >
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required >
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required >
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>  
</body>
</html>