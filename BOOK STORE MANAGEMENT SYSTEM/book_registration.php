<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book registration</title>
    <link rel="stylesheet" href="Bookreg.css">
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
                 <a href="./images/offer_book.jpeg">
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
                 <a href="./php crud/fetch1.php">
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
     
    <div class=" Book-Registration-form">
        <h1> Book Registration form </h1>
        <form action="book registration_code.php" method="POST">
            <p> Book Name</p>
            <input type="text" name="bname" placeholder="Enter Book name">
            <p>Author</p>
            <input type="text" name="author" placeholder=" Enter author">
            <p>Publisher</p>
            <input type="text" name="publisher" placeholder=" Enter publisher">
            <p>Genre</p>
            <input type="text" name="genre" placeholder="Enter genre">
            <p>Price</p>
            <input type="integer" name="price" placeholder=" Enter price"><br><br>
            <input type="submit" value="Register" name="submit">
            If you have already account <a href="Click here"></a>
            <button type="click here">
                Cancel
            </form>
        </div>
        <form>
 <input type="button" value="Go back!" onclick="history.back()">
 
</form>
</div>
</body>
</html>