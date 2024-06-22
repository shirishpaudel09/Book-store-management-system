<?php
    include 'config.php';
    $bid=$_GET['id'];
    $sql="SELECT * FROM bregistration where bid='$bid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $Book=$row['bname'];
            $Author=$row['author'];
            $Publisher=$row['publisher'];
            $Genre=$row['genre'];
            $Price=$row['price'];
        }
    }       
if(isset($_POST['id']))
{
    $Bname = $_POST['bname'];
	  $Author = $_POST['author'];
	  $Publisher = $_POST['publisher'];
    $Genre = $_POST['genre'];
    $Price = $_POST['price'];

     $sql = "UPDATE bregistration SET bname='$Bname',author='$Author',publisher='$Publisher',genre='$Genre',price='$Price' where bid=$bid";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
              //redirect to fetch1.php
            // echo "updated successfully";
               header('location:fetch1.php');
     }
    else
    {
                     die(mysqli_error($conn)); 
                  } 
      }                
    ?>   
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editing </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Book Name</label>
    <input type="text" class="form-control" placeholder="" name="bname" autocomplete="off" value="<?php echo $Book;?>">
    </div>
  <div class="form-group">
    <label>Author</label> 
    <input type="text" class="form-control" placeholder=""  name="author"  autocomplete="off" value="<?php echo $Author;?>">    
  </div>
  <div class="form-group">
    <label>Publisher</label> 
    <input type="publisher" class="form-control" placeholder="" name="publisher" autocomplete="off" value="<?php echo $Publisher;?>">    
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="genre" class="form-control" placeholder="" name="genre" autocomplete="off" value="<?php echo $Genre;?>">    
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="price" class="form-control" placeholder="" name="price" autocomplete="off" value="<?php echo $Price;?>">    
  </div>
  <br>  
  <!-- <div class="form-group">
    <input type="submit"  placeholder="" name="submit"> -->
 <button type="save" class="btn btn-primary" name="save">Update</button> 
</form>
</div>   
</body>
</html>