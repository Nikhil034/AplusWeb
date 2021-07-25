<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php


$rn=$_GET['i'];
$sq=mysqli_query($con,"select * from feestentable where Sid='$rn'");
$col=mysqli_fetch_array($sq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subject Fees Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">

  <div class="card">
    <div class="card-header">Update Paid Fees</div>
    <div class="card-body">
      <form method="post">

      <input class="form-control" type="text" placeholder="" name="sid" value="<?php echo $col[0];?>">
      <br>
      <input class="form-control" type="text" placeholder=""  name="sub" value="<?php echo $col[1];?>">
      <br>
      <input class="form-control" type="text" placeholder="Update Paid Fees" name="paid" value="<?php echo $col[2];?>">
    </div> 
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" value="Change" name="dn">

      <a href="feesmanage.php" class="btn btn-danger">Exit</a>
    </div>
    </form>
  </div>
</div>


<?php

if (isset($_POST['dn']))
  {
  $id=$_POST['sid'];
  $pd=$_POST['paid'];
  
  


 

   $up=mysqli_query($con,"UPDATE feestentable SET Pay='$pd' WHERE Sid = '$id'");

   if($up)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Fees Update Succesfull
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



 <a href="AdminLoginhere.php" >Login First</a>
<?php
}
?> 
