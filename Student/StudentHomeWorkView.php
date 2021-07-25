<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{


   $Mail=$_SESSION['emg'];
   echo $Mail."<br>";

   $std9=mysqli_query($con,"select Standard from studentninedata where Email='$Mail'");
   $std10=mysqli_query($con,"select Standard from studentendata where Email='$Mail'");

   while ($id=$std9->fetch_assoc())
    {
       $stan9=$id['Standard'];
   }
    while ($st=$std10->fetch_assoc())
    {
       $stan10=$st['Standard'];
       echo $stan10;
   }


   
?>
<?php


$sb=$_GET['i'];
if(isset($stan9))
{
$query9=mysqli_query($con,"select Work,Details,Gdate,Cdate from sethomeworknine where Subject='$sb'");
}
else
{
$quer10=mysqli_query($con,"select Work,Details,Gdate,Cdate from sethomeworkten where Subject='$sb'");
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
  <br>
 
<div class="container">
  
  <div class="card">
    <div class="card-body">
      <?php

      if(isset($query9))
      {

       while($data=mysqli_fetch_array($query9))
       {

      ?>  

        <div class="d-flex p-2 bg-primary text-white"> 

        Title:- <?php echo $data['Work'];?>
  
  </div>
  <br>
   <div class="d-flex p-2 bg-primary text-white"> 

        Work:- <?php echo $data['Details'];?>
  
  </div>
  <br>

   <div class="d-flex p-2 bg-primary text-white"> 

        Give Date:- <?php echo $data['Gdate'];?>
  
  </div>
  <br>

    <div class="d-flex p-2 bg-primary text-white"> 

        Complete Date:- <?php echo $data['Cdate'];?>
  
  </div>

  <br>
  <br>

  
  <br>
  <?php
    }
   } 
  ?> 
  <?php 
  if(isset($quer10))
  {
    while($data10=mysqli_fetch_array($quer10))
    {
    ?>
      <div class="d-flex p-2 bg-primary text-white"> 

        Title:- <?php echo $data10['Work'];?>
  
  </div>
  <br>
   <div class="d-flex p-2 bg-primary text-white"> 

        Work:- <?php echo $data10['Details'];?>
  
  </div>
  <br>

   <div class="d-flex p-2 bg-primary text-white"> 

        Give Date:- <?php echo $data10['Gdate'];?>
  
  </div>
  <br>

    <div class="d-flex p-2 bg-primary text-white"> 

        Complete Date:- <?php echo $data10['Cdate'];?>
  
  </div>

  <br>
  <br>

  
  <br>
  <?php 
   }
    }
    ?>
   <div class="d-flex p-2 bg-warning text-white"> 

      Dear,Student Complete Your HomeWork
  
  </div> 
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
