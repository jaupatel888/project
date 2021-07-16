
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
  die("No Connectio" . mysqli_connect_error());
}
?>
<?php
   
    // When form submitted, insert values into the database.

    if (isset($_REQUEST['Book_Id'])) {
        $Book_Id       = stripslashes($_REQUEST['Book_Id']);
        $Book_Id       = mysqli_real_escape_string($con, $Book_Id);
        $Book_Title    = stripslashes($_REQUEST['Book_Title']);
        $Book_Title    = mysqli_real_escape_string($con, $Book_Title);
        $Book_Author   = stripslashes($_REQUEST['Book_Author']);
        $Book_Author   = mysqli_real_escape_string($con, $Book_Author);
        $Book_Quantity = stripslashes($_REQUEST['Book_Quantity']);
        $Book_Quantity = mysqli_real_escape_string($con, $Book_Quantity);

        $query    = "INSERT into `books` (Book_Id, Book_Title, Book_Author, Book_Quantity)
                     VALUES ('$Book_Id', '$Book_Title', '$Book_Author','$Book_Quantity')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                   location.replace('add_book.php');
                </script>
             <?php
        }else {
            ?>
                <script>
                    alert ('error');
                   location.replace('add_book.php');
                </script>
             <?php
        }
    } else {
?>

<!DOCTYPE html>
<html>
<head>
   <head>
        <title>Add Book</title>
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
            <h1 class="text-center text-primary login-title">add book</h1>
            <div class="account-wall">
                
                <form class="form-signin" action="" method="post"><br>
                    <input type="text" class="form-control" placeholder="Book_Id" name="Book_Id" required><br>
                    <input type="text" class="form-control" placeholder="Book_Title" name="Book_Title" required><br>
                     <input type="text" class="form-control" placeholder="Book_Author" name="Book_Author" required><br>
                     <input type="text" class="form-control" placeholder="Book_Quantity" name="Book_Quantity" required><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="submit" name="submit"><br>
                </form>
                    <form class="form-signin" action="Dashboard.php" method="post"><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Home" name="btn1">
            </div>
            
        </div>
    </div>
</div>
  <?php
    }
?>

</body>
</html>