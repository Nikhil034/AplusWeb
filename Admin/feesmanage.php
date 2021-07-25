
<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>
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

       header("location:ninefeesdata.php");
     }
     else
     {
      header("location:tenfeesdata.php");
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
        <th>EDIT</th>
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
        <td>
         <a href="SubjectFeesNineEdit.php?i=<?php echo $r['Sid'];?>" class="btn btn-success">
           
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>

         </a>
        </td>
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

$con=mysqli_connect("localhost","root"," ","aplusweb");

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
        <th>EDIT</th>
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
        <td>
          <a href="SubjectFeesTenEdit.php?i=<?php echo $r['Sid'];?>" class="btn btn-success">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>

          </a>
        </td>
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
<form action=""> 
         &nbsp &nbsp   &nbsp &nbsp   <input type="submit" class="btn btn-warning" value="Home" formaction="index.php "  >
         </form>
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
