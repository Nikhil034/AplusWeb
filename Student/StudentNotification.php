<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{
   
   $Mail=$_SESSION['emg'];
    $id=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");
    $std=mysqli_query($con,"select Standard from studentninedata where Email='$Mail'");
    $std10=mysqli_query($con,"select Standard from studentendata where Email='$Mail'");
   while ($row2 = $id->fetch_assoc())
    {
     $call=$row2['RollNo']."<br>";
    // echo $call;
   }
   while($stustd=$std->fetch_assoc()){

    $Student=$stustd['Standard']."<br>";
    echo $Student;

   }
   while($st10=$std10->fetch_assoc())
   {
    $Student10=$st10['Standard']."<br>";
    echo $Student10;
   }
?>   
<?php


if(isset($Student))
{
$query=mysqli_query($con,"select distinct DateE from showevent where Who='9'");

}
if(isset($Student10)){
  $query2=mysqli_query($con,"select distinct DateE from showevent where Who='10'");

}
if(!isset($Student,$Student10))
{
  $query3=mysqli_query($con,"SELECT distinct DateE FROM showevent WHERE Who='All'");
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notification Show</title>
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
    <div class="card-header">Event Details</div>
    <div class="card-body">

      <table class="table">
    <thead>
      <tr class="table table-primary">
        <th>DATE</th>
        <th>VIEW</th>
       
      </tr>
      
    </thead>
    <tbody> 
     
    </tbody>
     <?php

     if(isset($query))
     {

    while($r=mysqli_fetch_array($query))
  {

   ?>
   <tr>
     <td><?php echo $r['DateE'];?></td>
     <td>
      <a href="NotificationView.php?i=<?php echo $r['DateE'];?>" class="btn btn-primary">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
       <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
       <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
      </a>

     </td>
   </tr>
   <?php
    }
  }
    ?>
    <?php
    if(isset($query2))
    {
      while($ten=mysqli_fetch_array($query2))
      {
    ?>

     <tr>
     <td><?php echo $ten['DateE'];?></td>
     <td>
      <a href="NotificationView.php?i=<?php echo $ten['DateE'];?>" class="btn btn-primary">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
       <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
       <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
      </a>

     </td>
   </tr>
   <?php
    }
   }
   ?>

    <?php
    if($query3)
    {
      while($all=mysqli_fetch_array($query3))
      {
    ?>

     <tr>
     <td><?php echo $all['DateE'];?></td>
     <td>
      <a href="NotificationView.php?i=<?php echo $all['DateE'];?>" class="btn btn-primary">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
       <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
       <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg>
      </a>

     </td>
   </tr>
   <?php
    }
   }
   ?>
    

  </table>
</div>

          
    </div> 
    <div class="card-footer"></div>
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

