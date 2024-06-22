<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Design</title>
     <link rel="stylesheet" href="./dashboard.css">
     <!--Font Awesome Cdn Link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
     
 </head>
 <body>
     <div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
                 <a href="#">
                     <i class="fas fa-tachometer-alt"></i>
                     <!-- <i class="fa-solid fa-gauge-simple"></i> -->
                     <span>User dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="php crud/fetch.php">
                     <i class="fas fa-home"></i>
                     <span>User Management</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <i class="fas fa-book details"></i>
                     <span>Book records </span>    
                 </a>
             </li>
             <li>
                 <a href="#">
                     <i class="fas fa-book-open"></i>
                     <span>View Books</span>
                 </a>
             </li>
             <li>
 
                 <a href="#">
                     <i class="fas fa-question-circle"></i>
                     <span>Help</span>
                 </a>
             </li>
             <br>
             <br>
             <li>    
                 <a href="#">
                     <i class="fas fa-sign-out-alt"></i>
                     <span><a href="login.php">Log out</a></span>
                 </a>
             </li>
         </ul>
     </div>

     <div class="abc">
     <?php
            include 'config.php';
               // Perform the database query to get the result
             $sql = "SELECT * FROM uregistration";
             $result= mysqli_query($conn,$sql);
        ?>
              
                <?php
                while($row = $result->fetch_assoc())
                 {
                    echo "
                    <tr>
                    <td>$row[uid]</td>
                    <td>$row[uname]</td>
                    <td>$row[uaddress]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[password]</td> 
                
                    <td>
                    <a class='btn btn-primary btn-sm' href='/uregistration/insert.php?id=$row[uid]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='/uregistration/delete.php?id=$row[uid]'>Delete</a>  
                    </td>
          </tr>
                ";       
                }    
            ?>
    </div>
    
     
   <!-- <div class="main--content">
      <div class="header--wrapper">
          <div class="header-title">
              <span>Primary</span>
              <h2>DashBoard</h2>
       </div>  -->
 
</body>
</html>


