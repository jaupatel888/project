<?php
session_start();
if($_SESSION['name']==true){

}else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="w-100" style="height: 80px; background-color: black;">
	<form action="Selectadminhome" method="post">
<a href="issue_book.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">Issue book</a> 
<a href="show_your_issue.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">show your issue book</a>
<a href="return_book.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">return book</a> 
<input class="btn btn-primary" type="submit" value="Request Book" name="btn">
<input class="btn btn-primary" type="submit" value="Request Data" name="btn">
<a href="show_issue_data.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">show issue data</a> 
<a href="ragister_user.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">ragister user</a> 
<input class="btn btn-primary" type="submit" value="Remove User" name="btn">
<a href="add_book.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">Add book</a> 
<a href="show_book.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">Show book</a> 
<input class="btn btn-primary" type="submit" value="Remove Book" name="btn">
<a href="show_user.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">show user</a> 
<input class="btn btn-primary" type="submit" value="Your Issued Books" name="btn">
<a href="login.php"input class="btn btn-primary" type="submit" value="Register User" name="btn">logout</a>
<div >
</center>
</form>
</div>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="a (2).jpg" class="d-block w-100" alt="..." style="height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="color: black;">WELCOME</h1>
          
        </div>
      </div>
      <div class="carousel-item ">
        <img src="a (1).jpg" class="d-block w-100" alt="..." style="height: 600px">
        <div class="carousel-caption d-none d-md-block">

         
        </div>
      </div>
      <div class="carousel-item ">
        <img src="a (3).jpg" class="d-block w-100" alt="..."style="height: 600px">
        <div class="carousel-caption d-none d-md-block">
          
         
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>