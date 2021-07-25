<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>


<?php session_start();

//session is destroy when click on logout

session_destroy();
header("location:http://localhost/AplusWeb/Admin/AdminLoginhere.php");
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
