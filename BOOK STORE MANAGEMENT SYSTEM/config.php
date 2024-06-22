<?php
$conn = mysqli_connect('localhost','root','','dbbstore');
    if(!$conn)
    {
        die ("Error in connection");
    }

        else
        {
            echo("database connected to bregistration");
        }
?>