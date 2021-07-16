<?php
session_start();
?>
<?php

$user = "root";
$password = "";
$server  = "localhost";
$db = "wt_project";

$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
    ?>
    <?php
}else{
  die("No Connection" . mysqli_connect_error());
}
?>
            


<!DOCTYPE html>
<html>
    <head>
        <title>Return Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body background="https://images.wallpaperscraft.com/image/books_library_shelves_138556_1920x1080.jpg">
      <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4"><br><br><br>
            <h1 class="text-center text-primary login-title">Remove user</h1>
            <div class="account-wall">
                
                <form class="form-signin" action="" method="post"><br>
                    <input type="text" class="form-control" placeholder="student ID" name="get_id" required><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit"  name="submit">
                </form>
                <form class="form-signin" action="Dashboard.php" ><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Home" name="btn1">
                    </form>    
            </div>
            
        </div>
    </div>
</div>
<?php
              



                if(isset($_POST['submit']))
                {

                  $id = $_POST['get_id'];

                  $b = "DELETE FROM ragister_user where id ='$id' ";
                      $quary = mysqli_query($con,$b);
                     
                     if($quary)
                     {
                      ?>
                      <script>
                        alert("Remove success");
                      </script>
                      <?php
                    }
                    else
                    {
                      ?>
                      <script>
                        alert("enter valid student id");
                      </script>
                      <?php
                    }
                    }
                


                 
            ?>
    </body>
</html>
