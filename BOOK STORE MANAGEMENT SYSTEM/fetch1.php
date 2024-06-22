<html>
<head>
    <title>Book records</title>
</head>
<link rel="stylesheet" href="fetch1.css">
<link rel="stylesheet" href="admin_dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
                 <!-- <a href="./images/offer_book.jpeg"> -->
                 <a href="./fetch1.php">
                     <i class="fas fa-tachometer-alt"></i>
                     <span>Admin dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="./book_registration.php">
                 <i class="fa-solid fa-book-open"></i>
                     <span>Adding books</span>
                 </a>
             </li>
             <li>
                 <a href="./fetch1.php">
                     <i class="fas fa-book details"></i>
                     <span>Book records </span>    
                 </a>
             </li>
             <li>
                 <a href="./redeem.php">
                     <!-- <i class="fas fa-book-open"></i> -->
                     <i class="fas fa-book-reader"></i>
                     <span>Redeem book</span>
                 </a>
             </li>
             <li>
               <a href="#">
               <i class="fas fa-history"></i>
                 <span>Book History</span>
             <br>
             <br>
             <br>
             <br>
             <li>
             <li>
             <li>
             <li>    
                 <a href="#">
                     <i class="fas fa-sign-out-alt"></i>
                     <span><a href="login.php">Log out</a></span>
                 </a>
             </li>
         </ul>
     </div>
     <form>
 <input type="button" value="Go back!" onclick="history.back()">
</form> 
    </html>
<<?php
    include 'config.php' ;
    $sql = "SELECT * FROM bregistration" ;
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<br>" ;
        echo "<table width='50%' border='1px' align='center' style='border-collapse: collapse';>" ;
        echo "<tr><th>id</th><th>Bname</th><th>Author</th><th>Publisher</th><th>Genre</th><th>Price</th><th>Action</th> </tr>" ;
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>" ;
            echo "<td>" . $row['bid'] . "</td>" ;
            echo "<td>" . $row['bname'] ."</td>" ;
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['publisher']. "</td>" ;
            echo "<td>" . $row['genre']. "</td>" ;
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>";
            echo "<a class='btn btn-primary btn-sm' href='edit.php?id=" . $row['bid'] . "'>Edit</a>";
            echo "&nbsp;/&nbsp;";
            echo "<a class='btn btn-danger btn-sm' href='delete.php?id=" . $row['bid']. "'>Delete</a>"; 
            echo "</td>";
            echo "</tr>" ;
        }
                
        echo "</table>" ;
    } else {
        echo "No Records Found...";
    }
    mysqli_close($conn);
?>
