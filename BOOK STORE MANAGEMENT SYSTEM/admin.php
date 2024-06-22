<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Management System</title>
    <link rel="stylesheet" href="admin.css">

  </head>
  <body>
  
  <div class="loginbox">
    <h1 align="center" class="textt">Login Here</h1>
    <div class="formm">
        <form method="POST" action="admincode.php">
              
            <p>User Name:</p>
            <input type="text" name="uname" placeholder="Enter User name" required>

            <p>Password:</p>
            <input type="password" name="pwd" placeholder="Enter password" required>

            <input type="submit" name="login" value="login">
            <a href="#">Forgot password?</a><br>
            <a href="./Book_registration.php">register here</a>
            
        </form>
    </div>
  </body> 

</div>
</body>

</html>