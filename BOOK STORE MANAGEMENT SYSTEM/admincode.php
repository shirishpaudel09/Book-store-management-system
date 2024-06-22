<?php
include 'admin_connection.php';
if(isset($_POST['login']))
{
$username=$_POST['uname'];
$password=$_POST['pwd'];
    $sql="SELECT * FROM admin WHERE uname='$username' AND pwd='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count) 
    {
        header("location:admin_dashboard.php");
    }
    else
    {
        header("Location:User_registration.php");
    }
}
?>
