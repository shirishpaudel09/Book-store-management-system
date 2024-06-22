<?php
include 'config.php';
$id=$_GET['bid'];

    $query="DELETE  FROM bregistration WHERE bid= '$id'";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "record deleted";
        ?>
        <Meta http-equiv = "delete" content = "0; url = http://localhost/Book store management system/fetch1.php"/>
        <!-- header('location: fetch1.php');         -->
        <?php
    }
    else
    {
      echo "failed to delete";
    }
?> 


