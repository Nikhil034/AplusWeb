<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>


<?php


 $rn=$_GET['i'];
 $sq=mysqli_query($con,"select * from resultnine where Rollno='$rn'");
 $col=mysqli_fetch_array($sq);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Result 9th Class</title>
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
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="ExamResultManage.php">Exam & Result</a></li>
     <li class="breadcrumb-item"><a href="Resultnine.php">9th Result</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Result</li>
  </ol>
</nav>

 
       <form action="" method="post">
 
  <div class="card">
    <div class="card-header">Edit Marks</div>
    <div class="card-body">

      


        <input class="form-control" type="number" placeholder="Enter RollNo" name="rnumber"   value="<?php echo $col[1];?>">
      <br>

      <input class="form-control" type="text" placeholder="Enter Update Subject" name="sub" value="<?php echo $col[3];?>">
      <br>

      <input class="form-control" type="text" placeholder="Enter Update Marks" name="mark" value="<?php echo $col[4];?>">
      <br>


      <input class="form-control" type="text" placeholder="Enter Update Total" name="Ttl" value="<?php echo $col[5];?>">
    </div> 
    

    </div> 
    <div class="card-footer">

       <input type="submit" class="btn btn-info" value="Update" name="UpdateRe" formaction="  ">

       

    </div>
  </div>
</div>

</body>
</form>

</html>

<?php



if(isset($_POST['UpdateRe']))
{


  

  
$rn=$_POST['rnumber'];
$sb=$_POST['sub'];
$mr=$_POST['mark'];
$tt=$_POST['Ttl'];

  

  $qu=mysqli_query($con,"update resultnine set Subject='$sb',Mark='$mr',Total='$tt' where Rollno='$rn'");


     if($qu)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> Result Update Succesfull
  </div>";
  }
  else
  {
    echo "<div class='alert alert-danger'>
    <strong>Fail!</strong> Error Occur
  </div>";
  }
}
?>
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


