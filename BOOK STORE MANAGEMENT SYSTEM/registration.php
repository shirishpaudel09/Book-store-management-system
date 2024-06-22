<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form </title>
    
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <?php
    include 'connection.php';
    if(isset($_REQUEST['save']))
    {
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $sql="INSERT INTO tbl_user (fname,lname,email,password)VALUES('$firstname','$lastname','$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo("Data inserted successfully");
        }
        else{
            echo("Unable to insert data");
        }
    }

    ?>
    
    <div class="Registration-form">
        <h1>Registration Form</h1>
        <form action="<?php $_REQUEST['PHP_SELF']; ?>"method="POST">
            <p>Full Name</p>
            <input type="text" name="firstname" placeholder="First Name">
            <p>User Name</p>
            <input type="text" name="lastname" placeholder="Last Name">
            <p>Email</p>
            <input type="email" name="email" placeholder="Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="password"><br><br>
            <button type="submit" name="save">REGISTER</button>
            <a>If you have already account?</a>
        </form>
 
    </div>
</body>
</html>