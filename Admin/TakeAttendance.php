<?php

session_start();

if(isset($_SESSION['ema']))
{

?>
<?php include 'connection.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Take Attendance Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 <br>
 <br>

<div class="container">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
  </ol>
</nav>

  <div class="card">
    <div class="card-header">Attendance Take</div>
    <div class="card-body">
      <form method="post">
      
        <select class="form-select" aria-label="Default select example" name="selectclass">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-info" value="Get Class" name="sb1">

    </div>
    </form>
    <?php

    if(isset($_POST['sb1']))
    {
      
      $sb=$_POST['selectclass'];

     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb==9)
      {

       header("location:AttendanceNine.php");
     }
     else
     {
      header("location:AttendanceTen.php");
     }
     
   }
 }
    

    ?> 
    <div class="card-footer">
      <a href="index.php" class="btn btn-warning">
        Back Home
      </a>
    </div>
  </div>
</div>

</body>
</html>
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
