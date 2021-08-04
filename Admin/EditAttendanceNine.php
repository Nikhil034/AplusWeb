<?php include 'connection.php';?>
<?php

session_start();

if(isset($_SESSION['ema']))
{
   $id=$_GET['i'];
   //echo $id;
   $query=mysqli_query($con,"select RollNo,Date,Value from attendancenine where RollNo='$id'");
   $data=mysqli_fetch_array($query);
?>




 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Attendance Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br>

  <div class="container">
  
  <div class="card">
    <div class="card-header">Edit Attendance</div>
    <div class="card-body">

      <form method="post">
        <label>RollNo</label>
        <input class="form-control" type="text" placeholder="Student RollNo" readonly="" name="sroll" value="<?php echo $data[0];?>">
        <br>
        <label>Status</label>
        <input type="text"  name="upstatus" class="form-control" placeholder="Student Update Status" required="">

      
    </div> 
    <div class="card-footer">

      <input type="submit" class="form-control btn btn-success" name="upbtn" value="Update" id="up" >


    </div>
  </form>
  <?php
  
   if(isset($_POST['upbtn']))
   {
    $rn=$_POST['sroll'];
    $st=$_POST['upstatus'];

    $catch=$_POST;
    //var_dump($catch);

    $updateStatus=mysqli_query($con,"update attendancenine set Value='$st' where RollNo='$rn'");
     if($updateStatus)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong>Status Update Successfully
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }
    }



  ?>


    </div>
  </div>
</div>

	

	

</body>

</body>
</html>


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
