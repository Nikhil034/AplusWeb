
<?php

session_start();

if(isset($_SESSION['ema']))
{

?>

<?php include 'connection.php';?>


<?php
$rn=$_GET['i'];
$sq=mysqli_query($con,"select * from lecturenine where id='$rn'");
$col=mysqli_fetch_array($sq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Lecture Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

 
    <div class="form-group">

     
      <form action="" method="post">

      

      <h2>Edit Lecture </h2>

      <label for="no">ID</label>
      <input type="text" class="form-control"  name="ui"   value="<?php echo $col[0];?>">

      <label for="mon">Monday</label>
      <input type="text" class="form-control"   name="mon" value="<?php echo $col[2];?>">

      <label for="tue">Tuesday</label>
      <input type="text" class="form-control"  name="tue" value="<?php echo $col[3];?>">

      <label for="wed">Wednesday</label>
      <input type="text" class="form-control"   name="wed" value="<?php echo $col[4];?>">

      <label for="thu">Thursday</label>
      <input type="text" class="form-control"   name="thu" value="<?php echo $col[5];?>">

      <label for="fir">Friaday</label>
      <input type="text" class="form-control"   name="fir" value="<?php echo $col[6];?>">

      <label for="sat">Saturday</label>
      <input type="text" class="form-control bg-danger"  name="sat" value="<?php echo $col[7];?>">

        <label for="time">Time</label>
      <input type="text" class="form-control bg-danger"  name="Lec" value="<?php echo $col[1];?>">

      


    



   <br>

   <input type="submit" class="btn btn-success" value="Done" name="dn">

   <a href="LectureScheduleNine.php" class="btn btn-warning"> Cancel</a>



  </form>
</div>

</body>
</html>




<?php

if (isset($_POST['dn']))
  {
  $id=$_POST['ui'];
  $Mo=$_POST['mon'];
  $Tu=$_POST['tue'];
  $We=$_POST['wed'];
  $Th=$_POST['thu'];
  $Fi=$_POST['fir'];
  $Sa=$_POST['sat'];
  $Le=$_POST['Lec'];
 


 
 

   $up=mysqli_query($con,"UPDATE lecturenine SET Time_Lec='$Le', Monday = '$Mo', Tuesday = '$Tu', Wednesday='$We',Thursday = '$Th',Friaday='$Fi',Saturday='$Sa' WHERE id = '$id'");

   if($up)
   {
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Data Update Succesfull
  </div>";
   }
   else {
     echo"<div class='alert alert-danger'>
    <strong>Fail</strong> Error Occur
  </div>";
   }

   


  // header("location:ninedata1.php");
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