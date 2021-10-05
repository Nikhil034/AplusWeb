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
  <title>Take Leave </title>
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
    <div class="card-header">Fill Details</div>
    <div class="card-body">

    <form method="post" autocomplete="off">


       <label>Name</label>
      <input class="form-control" type="text" name="nmte" placeholder="Enter Name" required>
      <br>
       <label>Email</label>
      <input class="form-control" type="email" name="eml" placeholder="Enter Email" required>
      <br>
      <label>Title</label>
      <input class="form-control" type="text"  name="title" placeholder="Enter Title For Leave" required="">
      <br>
      <label>Reason</label>
      <textarea class="form-control" rows="3" name="rea" placeholder="Enter Reason For Leave" required=""></textarea>
      <br>
      <label>Date</label>
       <input class="form-control" type="date"  name="dat" required="">


      
    </div> 
    <div class="card-footer">

      <input type="submit" class="btn btn-primary" value="Submit" name="sb">
      
    </div>
  </div>
</form>
</div>

</body>
</html>
<?php

if(isset($_POST['sb']))
{


  $Nam=$_POST['nmte'];
  $M=$_POST['eml'];
  $Tit=$_POST['title'];
  $Re=$_POST['rea'];
  $Dt=$_POST['dat'];

  // echo "<pre>";
  // print_r($_POST);
  // die();

  $q=mysqli_query($con,"insert into leavedata(Name,Mail,Title,Reason,Date)values('$Nam','$M','$Tit','$Re','$Dt')");

   if($q)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Your Application  Send Succesfully !
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?>  