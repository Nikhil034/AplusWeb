<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php

//getting i variable value using GET method

  $id=$_GET['i'];


$de=mysqli_query($con,"delete from leavedata where id='$id'");

header("location:MyclassActivity.php");






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


