<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

  
   $Mail=$_SESSION['emg'];
   $id=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");

   $std9=mysqli_query($con,"select Standard from studentninedata where Email='$Mail'");
   
   $std10=mysqli_query($con,"select Standard from studentendata where Email='$Mail'");
   while ($row2 = $id->fetch_assoc())
    {
    echo "RollNo=".$row2['RollNo']."<br>";
   }
   while($row3=$std9->fetch_assoc())
   {
      $stcheck=$row3['Standard']."<br>";
      echo "Standard=" .$stcheck;
     
   }

   while($row4=$std10->fetch_assoc())
   {
      $call2= $row4['Standard']."<br>";
      echo $call2;
   }


   
?>
<?php

if(isset($stcheck))
{
$query9=mysqli_query($con,"SELECT * FROM sethomeworknine WHERE Std='9' ");
}
else
{
$query10=mysqli_query($con,"SELECT Subject FROM sethomeworkten WHERE Std='10'");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student HomeWork View</title>
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
    <div class="card-header">HomeWork View</div>
    <div class="card-body">
     

       <table class="table table-hover">
    <thead>
      <tr class="table table-primary">
        <th>SUBJECT</th>
        <th>VIEW</th>
        
      </tr>
    </thead>
    <tbody>
     
    </tbody>
     <?php

     if(isset($query9))
      

     {

         while($row=mysqli_fetch_array($query9))
         {
      ?>    

     <tr>
        <td><?php echo $row['Subject'];?></td>
        <td><a href="StudentHomeWorkView.php?i=<?php echo $row['Subject'];?>" class="btn btn-success">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>

        </a></td>
      </tr>
    <?php
     }
    
     } 
     ?>

     <?php

      if(isset($query10))
      {
        while($data=mysqli_fetch_array($query10))
        {
      
    ?>

      <tr>
        <td><?php echo $data['Subject'];?></td>
        <td><a href="StudentHomeWorkView.php?i=<?php echo $data['Subject'];?>" class="btn btn-success">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>


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
