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
<?php
                      $Id=$_SESSION['id'];
                      $b = "SELECT * from ragister_user where id ='$Id' ";
                      $b_run = mysqli_query($con, $b);
                     
                        if(mysqli_num_rows($b_run) > 0)
                        {
                          while ($row = mysqli_fetch_array($b_run)) {
                          $issue_book = $row['Issue_book'];
                          echo $issue_book;
                        
                      }
                    }

    
    if (isset($_REQUEST['student_id'])) {
        
        $student_id = stripslashes($_REQUEST['student_id']);
        $student_id = mysqli_real_escape_string($con, $student_id);
        $Book_id    = stripslashes($_REQUEST['Book_id']);
        $Book_id    = mysqli_real_escape_string($con, $Book_id);
        $Book_title = stripslashes($_REQUEST['Book_title']);
        $Book_title = mysqli_real_escape_string($con, $Book_title);
        $Status = 'issued';     
        $issue_date = date("Y-m-d H:i:s");
        if($issue_book<=2){
        $query    = "INSERT into `issue_data` (student_id,Book_id,Book_title,Status,issue_date)
                    VALUES ('$student_id','$Book_id','$Book_title','$Status','$issue_date')";
        $result   = mysqli_query($con, $query);
           
        
        if ($result) {
                
                $book = "SELECT * from books where Book_Id ='$Book_id' ";
                $book_run = mysqli_query($con, $book);
                  $_SESSION['Book_id']=$Book_id;
                  echo $_SESSION['Book_id'];
                  if(mysqli_num_rows($book_run) > 0)
                    {
                      while ($row = mysqli_fetch_array($book_run)) {
                        $total= $row['Book_Quantity']-1;
                        
                      }
                      $update = " UPDATE books set Book_Quantity='$total' WHERE Book_Id ='$Book_id'";
                      $data = mysqli_query($con,$update);
                      if($data)
                      {

                      }else
                      {}
                    }

                $Id=$_SESSION['id'];
                $user = "SELECT * from ragister_user where id ='$Id' ";
                $user_run = mysqli_query($con, $user);
                  
                  if(mysqli_num_rows($user_run) > 0)
                    {
                      while ($row = mysqli_fetch_array($user_run)) {
                        $Issue_book = $row['Issue_book']+1;
                        
                      }
                      $upd = " UPDATE ragister_user set Issue_book='$Issue_book' WHERE id ='$Id'";
                      $deta = mysqli_query($con,$upd);
                      if($deta)
                      {

                      }else
                      {}
                    }

            ?>
                <script>
                    alert ('issue success');
                    location.replace('issue_book');
                </script>

             <?php
           
        }
        else {
            ?>
                <script>
                    alert ('required Field Are Missing.');
                    location.replace('issue_book');
                    
                </script>

             <?php
        }
        }else{
            ?>
                <script>
                    alert ('you already 3 book issued');
                    location.replace('issue_book');
                </script>

             <?php
           }
    } else {

?>


<html>
    <head>
        <title>Issue Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
          .lable{
            color: white;
          }
        </style>
    </head>
    <body background="https://images.wallpaperscraft.com/image/books_library_shelves_138556_1920x1080.jpg">

    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <input type="text" name="get_id" class="form-control" placeholder="enter id" required="">
                </div>
              </div>
              <div class="col-md-6">
                <input type="submit" name="fatch_btn" class="btn btn-primary" value="fatch id">
              </div>

            </div>
            
          </form>
        </div>
        <div class="col-md-5">

            <?php
                if(isset($_POST['fatch_btn']))
                {

                  $id = $_POST['get_id'];
                  $query = "SELECT * from books where Book_Id ='$id' ";
                  $query_run = mysqli_query($con, $query);
                  $Id = $_SESSION['id'];
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
                        
            ?>
            <form method="post">
          <div class="form-group">
            <label class="lable">student id</label>
            <input type="text" name="student_id" class="form-control" value=<?php  echo $Id ?> >
          </div>
          <div class="form-group">
            <label class="lable">Book id</label>
            <input type="text" name="Book_id" class="form-control" value=<?php echo $row['Book_Id']; ?>  >
          </div>
          <div class="form-group">
            <label class="lable">Book title</label>
            <input type="text" name="Book_title" class="form-control" value=<?php echo $row['Book_Title']; ?> >
          </div>
          <div class="form-group">
            <label class="lable">Book author</label>
            <input type="text" name="Book_author" class="form-control" value=<?php echo $row['Book_Author']; ?> >
          </div>
          <div class="form-group">
            <label class="lable">Book Quantity</label>
            <input type="text" name="Book_Quantity" class="form-control" value=<?php echo $row['Book_Quantity']; ?> >
          </div>
                   <div class="form-group">
            <input type="submit" name="issue" class="btn btn-primary" value="issue">
          </div>
         </form>


                        <?php

                    }

                  }else
                  {
                      ?>
                      <script>
                        alert("please enter valid id");
                      </script>
                      <?php
                  }

                }
            ?>


             
          
        </div>

      </div>
    </div>  
   
 <?php
    }
?>
      <footer>
        <form  action="User_Dashboard.php" method="post"><br>
                    <input class="btn btn-primary" type="submit" value="Home" name="btn1"></div>
      </footer>         
                    
</body>
</html>



