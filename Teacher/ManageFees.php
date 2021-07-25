<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>


<?php include('connection.php');?>
<?php


$s=mysqli_query($con,"select * from feestable");



?>


<!-- This below coding is fore option and title of student fees when admin click to option we redirect him to another page-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fees Managment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <br>

  <h4>Manage Fees for student</h4>
  
  <form action="" method="post">
  <div class="card">


    <div class="card-header">Select Class:-

    <select class="form-select" aria-label="Default select example" name="selectclass">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-info" value="Get Class" name="sb1">
</div>
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

       header("location:FeesDataNine.php");
     }
     else
     {
      header("location:FeesDataTen.php");
     }
     
   }

  }
  ?>


  <!-- below is table we fetch from the our database 9th class fees details-->

<br>


  <div class="card">
  <h5 class="card-header">Fees Detail 9th Class</h5>
  <div class="card-body">

    <div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>SUBJECT</th>
        <th>PAY</th>
       
      </tr>
    </thead>
    <tbody>
     
       
    </tbody>

   <?php 
     while($r=mysqli_fetch_array($s))
  {

   ?>
    <tr>
      <td><?php echo $r['Sid'];?></td>
       <td><?php echo $r['Subject'];?></td>
        <td><?php echo $r['Pay'];?></td>
        
    </tr>
     <?php
  }
  ?>    
  </table>
 
</div>

      <br><div class="card-footer bg-info text-white">Total Fees:-


  <?php



 $query = "SELECT * FROM feestable";
$query_run = mysqli_query($con, $query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += $num['Pay'];
}
echo $qty;

  ?>

  </div>
</div>
</div>
<br>

<!--- 10th class fees detail show below coding start-->
<?php



$s=mysqli_query($con,"select * from feestentable");



?>

 <div class="card">
  <h5 class="card-header">Fees Detail 10th Class</h5>
  <div class="card-body">

    <div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>SUBJECT</th>
        <th>PAY</th>
    
      </tr>
    </thead>
    <tbody>
     
       
    </tbody>

   <?php 
     while($r=mysqli_fetch_array($s))
  {

   ?>
    <tr>
      <td><?php echo $r['Sid'];?></td>
       <td><?php echo $r['Subject'];?></td>
        <td><?php echo $r['Pay'];?></td>

    </tr>
     <?php
  }
  ?>    
  </table>
 
</div>

      <br><div class="card-footer bg-info text-white">Total Fees:-


  <?php



 $query = "SELECT * FROM feestentable";
$query_run = mysqli_query($con, $query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += $num['Pay'];
}
echo $qty;

  ?>

  </div>
</div>

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