<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>


<?php include('connection.php');?>
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

    <form method="post">
 
  <div class="card">
    <div class="card-header">Create A New Exam 9th Class</div>
    <div class="card-body">


        <input class="form-control" type="texr" placeholder="Enter Sno" name="subn" required="">
      <br>

      <input class="form-control" type="text" placeholder="Enter  Subject" name="s" required="">
      <br>

      <input class="form-control" type="date" placeholder="Choose Exam Date" name="ed" required="">
      <br>


      <input class="form-control" type="text" placeholder="Enter Total Marks of Subject" name="Ttm" required="">

    



    </div> 
    <div class="card-footer">
       <input type="submit" class="btn btn-info" value="Create" name='tbex' >
         
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
  $dt=$_POST['ed'];
  $tm=$_POST['Ttm'];
 

 

  $q=mysqli_query($con,"insert into timetablenine(Sno,Subject,Date,Marks)values('$sn','$sun','$dt','$tm')");

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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 
