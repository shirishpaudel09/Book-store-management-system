<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Design</title>
     <link rel="stylesheet" href="./dashboard1.css">
     <!--Font Awesome Cdn Link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <style>
        .photo{
            background : silver;
            width : 70%;
            background : url('./BOOK STORE MANAGEMENT SYSTEM/images/books.png');
             }
        </style> -->
</head>
<body>
     <div class="sidebar">
         <div class="logo"></div>
         <ul class="items">
             <li class="active">
                 <a href="./dashboard.php">
                     <i class="fas fa-tachometer-alt"></i>
                     <!-- <i class="fa-solid fa-gauge-simple"></i> -->
                     <span>User Dashboard</span>
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
        <img src="./images/books.png">
     <!-- <div class="photo">
       
     <img src="C:\xampp\htdocs\BOOK STORE MANAGEMENT SYSTEM\images" alt="couldn't load image......">
</div> -->
</body>
</html>
