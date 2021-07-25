
<?php include('connection.php');?>
<?php

session_start();


if(isset($_SESSION['emg']))
{
 
   $Mail=$_SESSION['emg'];
    $id=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");
    $id2=mysqli_query($con,"select Rollno from studentendata where Email='$Mail'");


   while ($row2 = $id->fetch_assoc())
    {
     $call=$row2['RollNo']."<br>";
     echo $call;
   }

   while($r=$id2->fetch_assoc()){

    $ten=$r['Rollno']."<br>";
    echo $ten;
   }


   
?>



<?php


if(isset($call))
{
$query=mysqli_query($con,"select * from feesactivity where Rollno='$call'");
}
else{
$query2=mysqli_query($con,"select * from feesactivityten where Rollno='$ten'");}  




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Fees View</title>
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
  
  <div class="card">
    <div class="card-header bg-primary text-white">Student Fees Details</div>
  
    <?php
      if(isset($call))
      {
     while($data=mysqli_fetch_array($query))
     {

      ?>
    <div class="card-body">


      <table class="table table-bordered">
    <thead>
      <tr>
        <th>RollNo</th>
        <td><?php echo $data['Rollno'];?></td>

      </tr>
      <tr>  
        <th>Name</th>
        <td><?php echo $data['Name'];?></td>

      </tr>
      <tr>  
        <th>Paid</th>
        <td><?php echo $data['Paid'];?></td>
      </tr> 
       <tr>  
        <th>Remain</th>
        <td><?php echo $data['Remain'];?></td>
      </tr> 
       <tr>  
        <th>Total</th>
        <td><?php echo $data['Total'];?></td>
      </tr> 
       <tr>  
        <th>Date/Time</th>
        <td><?php echo $data['Date/Time'];?></td>
      </tr> 
     
      
       <?php
   }
 }
   ?>

<?php
      if(isset($ten))
      {
     while($data2=mysqli_fetch_array($query2))
     {

      ?>
    <div class="card-body">


      <table class="table table-bordered">
    <thead>
      <tr>
        <th>RollNo</th>
        <td><?php echo $data2['Rollno'];?></td>

      </tr>
      <tr>  
        <th>Name</th>
        <td><?php echo $data2['Name'];?></td>

      </tr>
      <tr>  
        <th>Paid</th>
        <td><?php echo $data2['Paid'];?></td>
      </tr> 
       <tr>  
        <th>Remain</th>
        <td><?php echo $data2['Remain'];?></td>
      </tr> 
       <tr>  
        <th>Total</th>
        <td><?php echo $data2['Total'];?></td>
      </tr> 
       <tr>  
        <th>Date/Time</th>
        <td><?php echo $data2['Date/Time'];?></td>
        
      </tr> 
       <?php
   }
 }
   ?>
  
      
      

     
    </thead>
    <tbody>
     
    </tbody>
  </table>

 
  
</div>

      


      


    </div> 
    <div class="card-footer ">


      

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



 <a href="StudentLoginHere.php" >Login First</a>
<?php
}
?> 
