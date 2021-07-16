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

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $password=$_POST['password'];
  $name_searche="select * from ragister_user where Name='$name' and Password='$password'";
  $quary = mysqli_query($con,$name_searche);
  $cnt = mysqli_num_rows($quary);
  
  if ($cnt>0) 
  {
     while($row = mysqli_fetch_assoc($quary))
      {
           $Status=  $row["Status"];
           $user=  $row["Name"];
           $pwd=  $row["Password"];
           $Id = $row["id"];
           $_SESSION['id']=$Id;
        
      }
      if($Status=='admin')
      {

        ?>
          <script>
            location.replace('Dashboard.php');
          </script>
        <?php
      }
      else
      {
        ?>
          <script>
            location.replace('user/User_Dashboard.php');
          </script>
        <?php
      
      }
  }
  else
  {
    ?>
    <script>
     alert("password incurrect");
     location.replace('login.php');
    </script>
    <?php
  }

}
  ?>