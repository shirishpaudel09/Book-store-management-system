<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redeem books</title>
    <link rel="stylesheet" href="redeem.css">
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="redeem.js">
</head>
<body>
<div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
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
             <li>
             <li>    
                 <a href="#">
                     <i class="fas fa-sign-out-alt"></i>
                     <span><a href="login.php">Log out</a></span>
                 </a>
             </li>
         </ul>
     </div> 
     <div class="search-container">
        <label for="book-search">Search Books:</label>
        <input type="text" id="book-search" oninput="searchBooks()">
    </div>
    <div class="book-1">
        <h3>Book-1</h3>
        <img src="images/comedy_books.jpeg" alt="This is image of book redeem">
    </div>
    <div class="book-2">
        <h4>DBMS</h4>
        <img src="images/dbms1.jpeg" alt="This is image of the database">
</div>
   <div class="book-3">
    <h5>C#</h5>
    <img src="images/dotnet.jpeg" alt="This is image of the C# book">
</div>8
    <form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>    
<!-- <script>
        function searchBooks() {
            var searchQuery = document.getElementById("book-search").value.toLowerCase();
            var bookElements = document.querySelectorAll(".book-list > div");

            bookElements.forEach(function (bookElement) {
                var bookTitle = bookElement.querySelector("h3").innerText.toLowerCase();

                if (bookTitle.includes(searchQuery)) {
                    bookElement.style.display = "block";
                } else {
                    bookElement.style.display = "none";
                }
            });
        }
    </script> -->
</body>
</html>
