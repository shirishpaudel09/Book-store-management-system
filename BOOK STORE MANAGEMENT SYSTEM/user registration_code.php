<?php
session_start();
include 'config.php';
if(isset($_POST['register']));
{
$name = $_POST['uname'];
$address = $_POST['uaddress'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
/*
$sqlquery="SELECT * FROM uregistration WHERE uname='$name'AND uaddress='$address' AND email='$email'AND phone='$phone'AND password='$password')";
$result=mysqli_query($conn,$sqlquery);
$presentrow=mysqli_num_rows($result);
if($presentrow>0)
{
    $_SESSION['alert_message']='1';
    header("Location:user_registration.php");
}*/
$sql= "INSERT INTO uregistration(uname,uaddress,email,phone,password)
VALUES('$name','$address','$email','$phone','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo ("Data inserted successfully in the database (uregistration)");
}
else
{

    echo "error in insertion";
}
}
?>
