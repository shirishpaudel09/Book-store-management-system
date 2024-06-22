<?php
include 'admin_connection.php';
if(isset($_POST['login']))
{
$username=$_POST['uname'];
$password=$_POST['upassword'];
    $sql="SELECT * FROM uregistration WHERE uname='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count) 
    {
        

        header("location:dashboard.php");
    }
    else
    {
        header("Location:index.php");
    }
}
?>


