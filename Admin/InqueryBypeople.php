<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>New InQuery </title>
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
    <li class="breadcrumb-item"><a href="inqueryofPeople.php">inquiry</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Inquiry</li>
  </ol>
</nav>

  <div class="card">
    <div class="card-header">Add Details</div>
    <div class="card-body">
      <form method="post">

      <input class="form-control" type="text" placeholder="Enter Name" name="nm" required="">
      <br>
      <input class="form-control" type="number" placeholder="Enter Phoneno" name="pn" required="">
      <br>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" placeholder="Enter Note or Message" required=""></textarea>
      
    </div> 
    <div class="card-footer">
       &nbsp <input type="submit" class="btn btn-primary" value="Submit" name="sb">
    </div>
  </div>
  </form>
</div>

</body>
</html>

<?php

if(isset($_POST['sb']))
{
  

  $Nm=$_POST['nm'];
  $Pn=$_POST['pn'];
  $Ms=$_POST['msg'];

  $qu=mysqli_query($con,"insert into inquerypeople(Name,Phoneno,Message)values('$Nm','$Pn','$Ms')");

   if($qu)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Inquery Add Succesfull
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



