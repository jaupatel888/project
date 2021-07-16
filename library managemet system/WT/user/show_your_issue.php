<?php
session_start();
?>
<?php
 $Id = $_SESSION['id'];
 
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
  die("No Connectio" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>return book</title>
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
            <h1 class="text-center text-primary login-title">your issue book</h1>
            <div class="account-wall">
                <table border="2px " align="center" class="text-center" style="background-color: white; width: 100%; height: ">
                    <tr >
                        <th class="text-center"> issue id </th>
                        <th class="text-center"> student_id </th>
                          <th class="text-center"> Book_id </th>
                            <th class="text-center"> Book_title </th>
                              <th class="text-center"> issue_date </th>
                              <th class="text-center"> Status </th>
                              
                    </tr>   
                    <?php
$Id = $_SESSION['id'];

$sql = "SELECT * from issue_data where student_id ='$Id' ";
 $result = $con-> query($sql);
if(mysqli_num_rows($result) > 0)
                  {
                      while ($row = mysqli_fetch_array($result)) {
       			?>
        <tr>
        	<td><?php echo $row['id']?> </td>
            <td><?php echo $row['student_id']?> </td>
            <td><?php echo $row['Book_id']?> </td>
            <td><?php echo $row['Book_title']?> </td>
            <td><?php echo $row['issue_date']?> </td>
            <td><?php echo $row['Status']?> </td>
           	
         
        </tr>
   
		<?php

}
echo "</table>";
 }

$con->close();
?> 
                </table>
                
            </div>
            <form class="form-signin" action="User_Dashboard.php" method="post"><br>

                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Home" name="btn1">
        </div>
    </div>
</div>

    </body>
</html>
