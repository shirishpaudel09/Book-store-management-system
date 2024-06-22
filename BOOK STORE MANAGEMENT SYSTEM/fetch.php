<?php
    include 'config2.php' ;

    $sql = "SELECT * FROM uregistration" ;
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
        {
            echo "<br>" ;
            echo "<table width='70%' border='1px' align='center' style='border-collapse: collapse';>" ;
            echo "<tr><th>UID</th>  <th>Uname</th> <th>Uaddress</th> <th> Email</th> <th> phone </th>
            <th>Password</th> </tr>" ;

            // <th>Action</th><th>Edit</th><th>Delete</th>

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>" ;
                echo "<td>" .$row['uid'] . "</td>" ;
                echo "<td>" .$row['uname'] ."</td>" ;
                echo "<td>" .$row['uaddress'] . "</td>";
                echo "<td>" .$row['email']. "</td>" ;
                echo "<td>" .$row['phone']. "</td>" ;
                echo "<td>" .$row['password'] . "</td>";
                // echo "<td>" .$row['Action'] . "</td>" ;
                // echo "<td>" .$row['Edit'] ."</td>";
                // echo "<td>" .$row['Delete'] ."</td>";
                echo "</tr>" ;
             
                // <td>
                // <a class='btn btn-primary btn-sm' href='/uregistration/insert.php?id=$row[uid]'>Edit</a>
                // <a class='btn btn-danger btn-sm' href='/uregistration/delete.php?id=$row[uid]'>Delete</a>  
                // </td>
            }
          
            
            echo "</table>" ;
        }


        else 
        {
            echo ("No Records Found...") ;
        }

            mysqli_close($conn);

?>