<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<?php

//getting i variable value using GET method

  $id=$_GET['i'];


mysqli_query($con,"update studentninedata set isDeleted='1' where RollNo=$id");


header("location:ninedata1.php");

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

