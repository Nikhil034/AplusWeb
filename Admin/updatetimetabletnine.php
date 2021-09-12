<?php

session_start();

if(isset($_SESSION['ema']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['ema']; 

?>
<?php include 'connection.php';?>
<?php 


$sb=$_GET['i'];

$sq=mysqli_query($con, "select * from timetablenine where Subject='$sb'");
$col=mysqli_fetch_array($sq);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Time Table</title>
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
       <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="SetTimeTableNine.php">Time Table</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Table</li>
  </ol>
</nav>
    <div class="card-header">
       Update Table
    </div>
   
   <form method="post">

    <div class="card-body">

     
  



    <div class="card-body">


        <input class="form-control" type="text" placeholder="Enter Updated Sno" name="sn" value="<?php echo $col[0];?>">
        <br>
      
      <input class="form-control" type="text" placeholder="Enter Updated Subject" name="sb" value="<?php echo $col[1];?>">
      <br>

      <input class="form-control" type="date" placeholder="Enter Updated Date" name="dt" value="<?php echo $col[2];?>">
      <br>

      <input class="form-control" type="text" placeholder="Enter Updated Marks of Subject" name="mos" value="<?php echo $col[3];?>">
    </div> 
    </div> 
      
    </div>



    <div class="card-footer ">
      <input type="submit" class="btn btn-info" value="Update" name="tbupdate" formaction=" ">

      &nbsp    &nbsp   &nbsp   &nbsp  

         <input type="submit" class="btn btn-warning" value="Cancel" formaction="SetTimeTablenine.php"  >
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<?php



if(isset($_POST['tbupdate']))
{



  

  
  
  $sn=$_POST['sn'];
  $sb=$_POST['sb'];
  $dt=$_POST['dt'];
  $ms=$_POST['mos'];



  

  $sq=mysqli_query($con,"update timetablenine set Subject='$sb',Date='$dt',Marks='$ms' where Sno='$sn'");

   if($sq)
  {
   echo" <div class='alert alert-success'>
    <strong>Success!</strong> New Student Add Succesfull
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
