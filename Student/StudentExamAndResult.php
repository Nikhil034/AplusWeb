<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['emg']))
{

  
   $Mail=$_SESSION['emg'];
   echo $Mail."<br>";

   $std9=mysqli_query($con,"select Standard from studentninedata where Email='$Mail'");
   $std10=mysqli_query($con,"select Standard from studentendata where Email='$Mail'");

   $rno9=mysqli_query($con,"select RollNo from studentninedata where Email='$Mail'");
   $rno10=mysqli_query($con,"select Rollno from studentendata where Email='$Mail'");


  

   while($no=$rno9->fetch_assoc())
   {
     $stno=$no['RollNo']."<br>";
     echo $stno;
   }

   while($no2=$rno10->fetch_assoc())
   {
    $strno=$no2['Rollno']."<br>";
    echo $strno;
   }
   
   while($catch1=$std9->fetch_assoc())
   {
    $data9=$catch1['Standard']."<br>";
    echo $data9;
   }

  while($catch2=$std10->fetch_assoc())
  {
    echo $catch2['Standard']."<br>";
  }



  if(isset($data9))
  {

   $query9=mysqli_query($con,"SELECT * FROM timetablenine WHERE Std=9");
   $result9=mysqli_query($con,"SELECT * FROM resultnine WHERE Rollno='$stno'");
  }
  else
  {
    $query10=mysqli_query($con,"SELECT * FROM timetableten WHERE Std=10");
    $result10=mysqli_query($con,"SELECT * FROM resultten WHERE Rollno='$strno'");
  } 
  
 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Exam And Result</title>
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
    <div class="card-header">Student Upcoming Exam</div>
    <div class="card-body">
      

      <table class="table">
    <thead>
    <tr class="table-primary">
        <th>SUBJECT</th>
        <th>DATE</th>
        <th>MARK</th>
      </tr>

    </thead>
    <tbody>


     

    </tbody>
    <?php

    if(isset($query9))
    {

     while($nine=mysqli_fetch_array($query9))
     {

    ?>  
    <tr>
      <td><?php echo $nine['Subject'];?></td>
      <td><?php echo $nine['Date'];?></td>
      <td><?php echo $nine['Marks'];?></td>
    </tr>
    <?php
     }
    }
     ?>

     <?php

     if(isset($query10))
     {
      while($ten=mysqli_fetch_array($query10))
      {

     ?>   
      <tr>
      <td><?php echo $ten['Subject'];?></td>
      <td><?php echo $ten['Date'];?></td>
      <td><?php echo $ten['Marks'];?></td>
    </tr>
    <?php
     }
    }
     ?>

  </table>
  
      
    </div> 
    <div class="card-footer">


      

    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header">Student Result Declare</div>
    <div class="card-body">

       <table class="table">
    <thead>
    <tr class="table-success">
        <th>SUBJECT</th>
        <th>DATE</th>
        <th>GET</th>
      
      </tr>

    </thead>
    <tbody>


     

    </tbody>
     <?php

    if(isset($query9))
    {

     while($resultnine=mysqli_fetch_array($result9))
     {

    ?>  
    <tr>
      <td><?php echo $resultnine['Subject'];?></td>
      <td><?php echo $resultnine['Date_Ex'];?></td>
      <td><?php echo $resultnine['Mark'];?></td>
     
    </tr>
    <?php
     }
    }
     ?>
      <?php

     if(isset($query10))
     {
      while($resultten=mysqli_fetch_array($result10))
      {

     ?>   
      <tr>
      <td><?php echo $resultten['Subject'];?></td>
      <td><?php echo $resultten['Date_Ex'];?></td>
      <td><?php echo $resultten['Mark'];?></td>
    </tr>
    <?php
     }
    }
     ?>
  </table>
      


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
 
  header("location:http://localhost/AplusWeb/Student/StudentLoginHere.php");
?>




<?php
}
?> 

