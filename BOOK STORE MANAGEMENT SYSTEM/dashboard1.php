<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Design</title>
     <link rel="stylesheet" href="./dashboard1.css">
     <!--Font Awesome Cdn Link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
     <style>
        .shirish{
            background : silver ;
            width : 80%;
            margin-left : 100px ; 
        }

        </style>
 </head>
 <body>
     <div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
                 <a href="./dashboard.php">
                     <i class="fas fa-tachometer-alt"></i>
                     <!-- <i class="fa-solid fa-gauge-simple"></i> -->
                     <span>User dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="./php crud/index.php">
                 
                     <i class="fas fa-home"></i>
                     <span>User Management</span>
                 </a>
             </li>
             <li>
                 <a href="./dashboard.php">
                     <i class="fas fa-book details"></i>
                     <span>Book records </span>    
                 </a>
             </li>
             <li>
                 <a href="view_books.php">
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

     <div class="shirish">

     <?php
    include 'config.php' ;

    $sql = "SELECT * FROM uregistration" ;
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
        {
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<br>" ;
            echo "<table width='70%' border='1px' align='center' style='border-collapse: collapse';>" ;
            echo "<tr><th>UID</th>  <th>Uname</th> <th>Uaddress</th> <th> Email</th> <th> phone </th>
            <th>Password</th> </tr>" ;

            // <th>Action</th><th>Edit</th><th>Delete</th>

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>" ;
                echo "<td>" .$row['uid'] . "</td>" ;
                echo "<td>" .$row['uname'] ."</td>" ;
                echo "<td>" .$row['uaddress'] . "</td>";
                echo "<td>" .$row['email']. "</td>" ;
                echo "<td>" .$row['phone']. "</td>" ;
                echo "<td>" .$row['password'] . "</td>";
                // echo "<td>" .$row['Action'] . "</td>" ;
                // echo "<td>" .$row['Edit'] ."</td>";
                // echo "<td>" .$row['Delete'] ."</td>";
                echo "</tr>" ;
             
                // <td>
                // <a class='btn btn-primary btn-sm' href='/uregistration/insert.php?id=$row[uid]'>Edit</a>
                // <a class='btn btn-danger btn-sm' href='/uregistration/delete.php?id=$row[uid]'>Delete</a>  
                // </td>
            }
          
            
            echo "</table>" ;
        }


        else 
        {
            echo ("No Records Found...") ;
        }

            mysqli_close($conn);

?>
</div>

</body>
 </html>
