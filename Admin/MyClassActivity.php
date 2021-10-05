<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>

<?php include 'connection.php';?>



<?php


$s=mysqli_query($con,"select * from lecturenine");
$Leave=mysqli_query($con,"select * from leavedata");
$dt=date('d-m-y'); 
//echo $dt;
$Status=mysqli_query($con,"select * from entertimeteacher where Sdate='$dt'");
$Status2=mysqli_query($con,"select * from outtimeteacher where Sdate='$dt'");
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>MyClass Activity</title>
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
    <div class="card-header">
    	 Show Class Lecture Schedule
        <a href="index.php" class="btn btn-warning" style="float: right;">Hdsfsdfds</a>
    </div>
    <div class="card-body">



  <div class="card">
  <div class="card-body">
    <h4 class="card-title">Click To Show</h4>

     <a href="LectureScheduleNine.php"><button type="button" class="btn btn-primary btn-bg">Class 9TH</button></a>
    <a href="LectureScheduleTen.php"><button type="button" class="btn btn-success btn-bg">Class 10TH</button></a>


   <!--  <a href="LectureScheduleNine.php" class="btn btn-success" >Class 9th Schedule</a> 
    <a href="LectureScheduleTen.php" class="btn btn-primary">Class 10th Schedule</a> -->
  </div>
</div>





   
    </div> 
    
  </div>
  
  <br>
  <div class="card">
  <div class="card-header">Show Parents Contact Detail </div>
  <div class="card-body">

    <form method="post">

    <br>
    <select class="form-select" aria-label="Default select example" name="selectclass">
  <option selected disabled="true">Choose Class</option>
  <option value="9">9</option>
  <option value="10">10</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-warning" value="Get Data" name="sb1">
    
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

       header("location:ParentsDataNine.php");
     }
     else
     {
      header("location:ParentsDataTen.php");
     }
     
   }

  }
  ?>
  
</div>

<br>
  <br>
  <div class="card">
    <div class="card-header">Show Teacher Leave Application </div>
    <div class="card-body">

      <table class="table table-hover">
    <thead>
      
      <tr class="">
        <th>No</th>
        <th>Name</th>
        <th>DATE</th>
        <th>View</th>
     
    </tr>
    </thead>
    <tbody>
      
    </tbody>
    <?php

      while($row=mysqli_fetch_array($Leave))
      {

    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Date'];?></td>
      <td>
        <a href="LeaveData.php?i=<?php echo $row['id'];?>" class="btn btn-success">Show</a>
      </td>
    </tr>
    <?php

     }
     ?>
   
</table>
   
      
    </div> 

    
  </div>

  <br>

  <div class="card">
  <div class="card-header">Show Teacher Time Status</div>
  <div class="card-body">

     <table class="table table-hover">
    <thead>
      
      <tr class="table table-primary">
        <th>Name</th>
        <th>IN</th>
      
        
     
    </tr>
    </thead>
    <tbody>
      
    </tbody>
    <?php

      while($row=mysqli_fetch_array($Status))
      {

     ?>
     
     <tr>
       <td><?php echo $row['Teacher_Name'];?></td>
       <td><?php echo $row['Time_Catch'];?></td>
       
       
     </tr>
   
  <?php
   }
   ?>
  </table>
 

     <table class="table table-hover">
    <thead>
      
      <tr class="table table-danger">
        <th>Name</th>
        <th>OUT</th>
      
        
     
    </tr>
    </thead>
    <tbody>
      
    </tbody>
    <?php

      while($row1=mysqli_fetch_array($Status2))
      {

     ?>
     
     <tr>
       <td><?php echo $row1['Teacher_Name'];?></td>
       <td><?php echo $row1['Time_Catch'];?></td>
       
       
     </tr>
   
  <?php
   }
   ?>
  </table>
 

    
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



 <a href="AdminLoginHere.php" >Login First</a>
<?php
}
?> 
​