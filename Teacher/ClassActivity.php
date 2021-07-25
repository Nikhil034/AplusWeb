
<?php include('connection.php');?>
<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 
  $teachernm=mysqli_query($con,"select Name from teacherdata where Email='$mail'");
  while($row=$teachernm->fetch_assoc()){
     $name=$row['Name'];
  }

?>



<?php

$s=mysqli_query($con,"select * from lecturenine");
$Leave=mysqli_query($con,"select * from leavedata");
$Status=mysqli_query($con,"select * from entertimeteacher");
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
    </div>


    <div class="card-body">

        <div class="card">
  <div class="card-body">
    <h4 class="card-title">Click To Show</h4>

    <a href="LectureNine.php"><button type="button" class="btn btn-primary btn-bg">Class 9TH</button></a>
    <a href="LectureTen.php"><button type="button" class="btn btn-success btn-bg">Class 10TH</button></a>

  
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

       header("location:NineParentData.php");
     }
     else
     {
      header("location:TenParentData.php");
     }
     
   }

  }
  ?>
  
</div>

<br>
  <br>
  <div class="card">
    <div class="card-header">Leave Section </div>
    <div class="card-body">

    
    <a href="TakeLeaveByTeacher.php"><button type="button" class="btn btn-primary btn-bg">Give Application</button></a>
    <a href="LeaveDetailsOfTeacher.php"><button type="button" class="btn btn-success btn-bg">Your Leave Details</button></a>
      
    </div> 

    
  </div>

  <br>

  <div class="card">
  <div class="card-header">Your Status Activity Date :- <?php  $dt=date('d-m-y'); echo $dt?></div>
 <div class="card-body">


    <form method="post">

    <br>
    <select class="form-select" aria-label="Default select example" name="status">
  <option selected disabled="true">Give Recent Status </option>
  <option value="in">IN</option>
  <option value="out">OUT</option>




</select>

 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input  type="submit" class="btn btn-warning" value="Submit" name="st">

<br><br>  
<p>*You Can CheckOut Your Status one time of Each Today.</p>    
  </div>
  </form>



<?php  

  if(isset($_POST['st']))
  {
    if(!isset($_POST['status'])) 

     echo"<script>alert('Plese Select Option')</script>";
   
     $sb=$_POST['status'];
     //echo $sb;


     if(!$con)
     {
       echo"error";
     }
     else
     {

      if($sb=="out")
      {

       $q=mysqli_query($con,"insert into outtimeteacher(Teacher_Name,Email,Sdate,Status)values('$name','$mail','$dt','out')");

        if($q)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Out Status Add Done !
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }

       
      }
     
     else
     {
         $q=mysqli_query($con,"insert into entertimeteacher(Teacher_Name,Email,Sdate,Status)values('$name','$mail','$dt','in')");

         if($q)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> In Status Add Done !
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }
     }
     
   }

  }
  ?>

  
 

    
  </div>
  
</div>


</div>





​
</body>
</html>
​
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