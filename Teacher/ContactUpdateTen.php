<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>
<?php


$tenid=$_GET['i'];
$sq=mysqli_query($con,"select * from studentendata where User_id='$tenid'");
$col=mysqli_fetch_array($sq);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Contact Detail</title>
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
    <div class="card-header">Update Contact Details</div>
    <div class="card-body">

      <form method="post">

        <input class="form-control" type="text" placeholder="Student id" name="conid" value="<?php echo $col[0];?>">

        <br>

      <input class="form-control" type="text" placeholder="Student Name" value="<?php echo $col[2];?>">

      <br>

      <input class="form-control" type="text" placeholder="Update Contact" name="phone" value="<?php echo $col[5];?>">

      <br>

       <input type="submit" class="btn btn-primary" value="Update" name="dn">
       &nbsp <a href="TenParentData.php" class="btn btn-warning">Back</a>
      
    </div> 
   
  </div>
</div>
</form>

</body>
</html>

<?php

if (isset($_POST['dn']))
  {

  $pn=$_POST['phone'];
  $conid=$_POST['conid'];
 


 

   $up=mysqli_query($con,"UPDATE studentendata SET Phone='$pn' WHERE User_id = '$conid'");

   echo"<br>";

   if($up)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Data Update Succesfull
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
