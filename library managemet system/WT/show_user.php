
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

<!DOCTYPE html>
<html>
    <head>
        <title>show user</title>
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
            <h1 class="text-center text-primary login-title">show user</h1>
            <div class="account-wall">
                <table border="2px " class="text-center" style="background-color: white; width: 100%; height: ">
                    <tr >
                        <th class="text-center"> id </th>
                          <th class="text-center"> Name </th>
                            <th class="text-center"> Password </th>
                              <th class="text-center"> Status </th>
                              <th class="text-center"> Semester </th>
                              <th class="text-center"> Branch </th>
                              <th class="text-center"> Issue book </th>
                    </tr>   
                    <?php

$sql = "SELECT  id,Name,Password,Status,Semester,Branch,Issue_book FROM ragister_user"; //You don't need a ; like you do in SQL
 $result = $con-> query($sql);
if ($result-> num_rows > 0){
    while ($row = mysqli_fetch_array($result)) {
        # code...
   
    echo "<tr ><td>" . $row['id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Password'] . "</td><td>" . $row['Status'] . "</td><td>" . $row['Semester'] . "</td><td>" . $row['Branch'] . "</td><td>" . $row['Issue_book'] . "</td></tr>";  
}
echo "</table>";
 }

$con->close();
?> 
                </table>
                <form class="form-signin" action="Dashboard.php" ><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Home" name="btn1">
                    </form> 
            </div>
            
        </div>
    </div>
</div>

    </body>
</html>
