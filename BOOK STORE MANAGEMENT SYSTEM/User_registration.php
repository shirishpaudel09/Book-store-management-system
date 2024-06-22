<?php
session_start();
$message='';
if(isset($_SESSION['alert_message'])){
    $message='User Already Exist!!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_registration</title>
    <link rel="stylesheet" href="./Ureg.css">
</head>
<body>
        <div class=" User-Registration-form">
            <h1> User Registration Form</h1>
            <h4><?php echo($message); ?></h4>
            <form action="./database_connection.php" method="POST">
                <p>User name</p>
                <input type="text" name="uname" placeholder="Enter user name">
                <p>User address</p>
                <input type="text" name="uaddress" placeholder=" Enter user address">
                <p>Email</p>
                <input type="text" name="email" placeholder=" Enter email">
                <p>Phone number</p>
                <input type="integer" name="phone" placeholder="Enter phone number">
                <p>password</p>
            <input type="password" name="password" placeholder=" Enter password"><br><br>
                <input type="submit" name="register" value="Register"/><br>
                If you have already account?<a href="./login.php">login.php</a>
            </form>
        </div><?php unset($_SESSION['alert_message']);?>
</body>
</html>
