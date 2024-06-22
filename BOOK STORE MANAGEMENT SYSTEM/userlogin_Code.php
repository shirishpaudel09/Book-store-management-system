<?php
$Servername = "localhost";
$username = "root";
$password = "";
$db_name = "dbbstore";

//Create a connection
$conn = mysqli_connect($Servername, $username, $password, $db_name);

//Check the connection
if(!$conn){
    die("connection failed: ");
}
else{
    echo("Database connected successfully");
}