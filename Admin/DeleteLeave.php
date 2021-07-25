<?php

//getting i variable value using GET method

  $id=$_GET['i'];

$con=mysqli_connect("localhost","root"," ","studentdb");

$de=mysqli_query($con,"DELETE  FROM leavedata where id=$id");



header("location:MyclassActivity.php");


?>