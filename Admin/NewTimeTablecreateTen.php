<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create New Time Table</title>
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
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="SetTimeTableNine.php">Time Table</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create Table</li>
  </ol>
</nav>

    <form method="post">
 
  <div class="card">
    <div class="card-header">Create A New Exam 10th Class</div>
    <div class="card-body">


        <input class="form-control" type="texr" placeholder="Enter Sno" name="subn" required="">
      <br>

      <input class="form-control" type="text" placeholder="Enter  Subject" name="s" required="">
      <br>

      <input class="form-control" type="number" placeholder="Enter  Standard" name="st" required="">
      <br>


      <input class="form-control" type="date" placeholder="Choose Exam Date" name="ed" required="">
      <br>


      <input class="form-control" type="text" placeholder="Enter Total Marks of Subject" name="Ttm" required="">

    



    </div> 
    <div class="card-footer">
       <input type="submit" class="btn btn-info" value="Create" name='tbex' >
         <a href="SetTimeTablenine.php" class="btn btn-warning">Cancel</a>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>

<?php

if (isset($_POST['tbex']))
  {
  $sn=$_POST['subn'];
  $sun=$_POST['s'];
  $std=$_POST['st']; 
  $dt=$_POST['ed'];
  $tm=$_POST['Ttm'];
 



  $q=mysqli_query($con,"insert into timetableten(Sno,Subject,Std,Date,Marks)values('$sn','$sun','$std','$dt','$tm')");

  if($q)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Exam Add Succesfull
  </div>";
  }
  else
  {
    echo "<div class='alert alert-danger'>
    <strong>Fail!</strong> Error Occur
  </div>";
  }
  
  
 }
?>
}

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
