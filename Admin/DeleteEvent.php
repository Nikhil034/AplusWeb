<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php

//getting i variable value using GET method

  $id=$_GET['i'];

  


$q=mysqli_query($con,"delete  from showevent where No=$id");



header("location:EventManage.php");

?>

  <?php 
}



else
{
  echo "Plese Login Page";
?>



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 
