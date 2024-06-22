<?php
include 'config.php';
if(isset($_POST['submit']))
{
$Book=$_POST['bname'];
$Author=$_POST['author'];
$Publisher=$_POST['publisher'];
$Genre=$_POST['genre'];
$Price=$_POST['price'];
$sql = "INSERT INTO bregistration(bname,author,publisher,genre,price)
VALUES('$Book','$Author','$Publisher','$Genre','$Price')";
$result = mysqli_query($conn,$sql);
if($result)
{
     echo '<script>alert("Data inserted successfully in the database(bregistration)")</script>';
}
else{
    echo"Error in insertion";
}


}
?>