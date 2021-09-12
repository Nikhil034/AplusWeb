<?php
 
 session_start();
 if(isset($_SESSION['ema']))
 {

 ?>
<?php


$con=mysqli_connect("localhost","root","","aplusweb");
$rn=$_GET['i'];
$sq=mysqli_query($con,"select * from feesactivity where Rollno='$rn'");
$col=mysqli_fetch_array($sq);

?>

<!DOCTYPE html>
<html lang="en">
<head>

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
    <li class="breadcrumb-item"><a href="feesmanage.php">Fees Manage </a></li>
     <li class="breadcrumb-item"><a href="ninefeesdata.php">9th Fees </a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Fees</li>
  </ol>
</nav>

  <br>

  <form method="post">

  <div class="card">
    <div class="card-header">Update Fees Data</div>

    <div class="card-body">
      
      <input class="form-control" type="text" placeholder="Enter RollNo" name="rn" value="<?php echo $col[1];?>">
      <br>

      <input class="form-control" type="text" placeholder="Enter Paid Fees" name="pd" value="">
      <br>

      <input class="form-control" type="text" placeholder="Enter Remain Fees" name="rm" value="<?php echo $col[3];?>">
    </div> 
    </div> 



    <div class="card-footer">
      
        <input type="submit" class="btn btn-info" value="Update" name="fupdate" formaction=" ">

    </div>
  </div>
</div>

</body>
</form>
</html>

<?php



if(isset($_POST['fupdate']))
{

$con=mysqli_connect("localhost","root","","aplusweb"); //connection done

  

  
  
  $rn=$_POST['rn'];
  $p=$_POST['pd'];
  $rm=$_POST['rm'];



  

  $sq=mysqli_query($con,"update feesactivity set Paid='$p',Remain='$rm' where Rollno='$rn'");

  echo"<br>";

     if($sq)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Fees Update Succesfull
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }
}
?>


<?php

 }
 else
 {
  header("location:AdminLoginhere.php");
?>
<?php
 }
 ?>  

 

