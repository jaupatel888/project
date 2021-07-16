
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

    if (isset($_REQUEST['Name'])) {
        // removes backslashes
        $Name = stripslashes($_REQUEST['Name']);
        $Name = mysqli_real_escape_string($con, $Name);
        $Password = stripslashes($_REQUEST['Password']);
        $Password = mysqli_real_escape_string($con, $Password);
        $Status    = stripslashes($_REQUEST['Status']);
        $Status    = mysqli_real_escape_string($con, $Status);
        $Semester = stripslashes($_REQUEST['Semester']);
        $Semester = mysqli_real_escape_string($con, $Semester);
        $Branch = stripslashes($_REQUEST['Branch']);
        $Branch = mysqli_real_escape_string($con, $Branch);
       

   
      
        $query    = "INSERT into `ragister_user` (Name, Password, Status, Semester, Branch)
                     VALUES ('$Name', '$Password', '$Status', '$Semester', '$Branch')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                    location.replace('ragister_user.php');
                </script>
             <?php
        }else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
        }
    } else {
?>

<!DOCTYPE html>
<html>
<head>
   <head>
        <title>Register</title>
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
                <h1 class="text-center text-primary login-title">Register User</h1>
                <div class="account-wall">
                
                    <form class="form-signin" action="" method="post"><br>
                        <input type="text" class="form-control" placeholder="User Name" name="Name" required><br>
                        <input type="text" class="form-control" placeholder="User Password" name="Password" required><br>
                        <select class="form-control" id="sel1" name="Status">
                            <option >admin</option>
                            <option>student</option>
                        </select></br>
                        <input type="text" class="form-control" placeholder="Semester" name="Semester" required><br>
                        <input type="text" class="form-control" placeholder="Branch" name="Branch" required><br>
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register" name="submit">
                    </form>
                    <form class="form-signin" action="Dashboard.php" method="post"><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Home" name="btn1">
                    </form>

                </div>
            
            </div>
        </div>
    </div>
<?php
    }
?>

</body>
</html>