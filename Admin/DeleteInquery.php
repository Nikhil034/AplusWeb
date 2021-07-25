<?php

//getting i variable value using GET method

  $id=$_GET['i'];

  

$con=mysqli_connect("localhost","root"," ","studentdb");

$q=mysqli_query($con,"delete  from inquerypeople where Noid=$id");



header("location:InqueryofPeople.php");

?>
