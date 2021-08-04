<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{


   $Mail=$_SESSION['emg'];
   echo $Mail;
 


   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">

body
{
  background-color: 
}

  </style>
  <title>Student Lecture View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  <br>
 
<div class="container">
 
  <div class="card">
    <div class="card-header">Lecture Schedule</div>
    <div class="card-body">


       <a href="StudentNineLecture.php" class="btn btn-primary btn-bg">Class 9TH</a>
       <a href="StudentTenLecture.php" class="btn btn-success btn-bg">Class 10TH</a>
      
    </div> 
    <div class="card-footer"></div>
  </div>
</div>

</body>
</html>
<?php 
}



else
{
 
  header("location:http://localhost/AplusWeb/Student/StudentLoginHere.php");
?>




<?php
}
?> 