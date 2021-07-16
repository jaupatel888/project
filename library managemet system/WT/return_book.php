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
            <h1 class="text-center text-primary login-title">Return Book</h1>
            <div class="account-wall">
                
                <form class="form-signin" action="" method="post"><br>
                    <input type="text" class="form-control" placeholder="Issue ID" name="issue_id" required><br>
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
                  $id = $_POST['issue_id'];
                  $b = "SELECT * from issue_data where id ='$id' ";
                  $b_run = mysqli_query($con, $b);
                     
                  if(mysqli_num_rows($b_run) > 0)
                    {
                      while ($row = mysqli_fetch_array($b_run)) 
                      {
                         $Status = $row['Status'];
                          $book_id = $row['Book_id']; 
                        
                      }
                    }


                      $query = "SELECT * from issue_data where id ='$id' ";
                      $query_run = mysqli_query($con, $query);
                      $cnt = mysqli_num_rows($query_run);
                        if($cnt>0 && $Status=='issued')
                        {
                          $book = "SELECT * from issue_data where id ='$id' ";
                          $book_run = mysqli_query($con, $book);
                     
                          if(mysqli_num_rows($book_run) > 0)
                            {
                              while ($row = mysqli_fetch_array($book_run)) 
                              {
                                $return= 'return';
                                $book_id = $row['Book_id']; 
                        
                              }
                              $update = " UPDATE issue_data set Status='$return' WHERE id ='$id'";
                              $data = mysqli_query($con,$update);
                              if($data)
                              {}else
                                {}
                            }

                              $book = "SELECT * from books where Book_id ='$book_id' ";
                              $book_run = mysqli_query($con, $book);
                     
                              if(mysqli_num_rows($book_run) > 0)
                              {
                                while ($row = mysqli_fetch_array($book_run)) 
                                {
                                  $total= $row['Book_Quantity']+1;
                                }
                                  $update = " UPDATE books set Book_Quantity='$total' WHERE Book_id ='$book_id'";
                                  $data = mysqli_query($con,$update);
                                  if($data)
                                  {}else
                                  {}
                              }

                                $Id=$_SESSION['id'];
                                $user = "SELECT * from ragister_user where id ='$Id' ";
                                $user_run = mysqli_query($con, $user);
                  
                                  if(mysqli_num_rows($user_run) > 0)
                                    {
                                      while ($row = mysqli_fetch_array($user_run)) 
                                      {
                                        $Issue_book = $row['Issue_book']-1;
                        
                                      }
                                      $upd = " UPDATE ragister_user set Issue_book='$Issue_book' WHERE id ='$Id'";
                                      $deta = mysqli_query($con,$upd);
                                      if($deta)
                                      {}else
                                      {}
                                    }


                                    ?>
                                      <script>
                                      alert("return success");
                                      </script>
                                    <?php

                        }else
                                  {
                                    ?>
                                      <script>
                                         alert("please valid issue id");
                                      </script>
                                    <?php
                                  } 
                } 
            ?>
    </body>
</html>
