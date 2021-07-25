<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

   
   $Mail=$_SESSION['emg'];

   
?>
<?php

$id=$_GET['i'];
$query=mysqli_query($con,"select distinct Title,Description,DateE from showevent where DateE='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notification View</title>
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
    <div class="card-body">
      <?php

       while($data=mysqli_fetch_array($query))
       {

      ?>  

        <div class="d-flex p-2 bg-primary text-white"> 

        Title:- <?php echo $data['Title'];?>
  
       </div>

       <br>
       <div class="d-flex p-2 bg-primary text-white"> 

        Details:- <?php echo $data['Description'];?>
  
      </div>
     <br>

   <div class="d-flex p-2 bg-primary text-white"> 

        Date:- <?php echo $data['DateE'];?>
  
  </div>

  <br>
  <br>

   <div class="d-flex p-2 bg-success text-white"> 

      Thanks You,Tarak Gajera
  
  </div>
  <?php
    }
  ?>  
    </div>
  </div>
</div>
​
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
​
