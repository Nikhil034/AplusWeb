<?php

session_start();

if(isset($_SESSION['eml']))
{

  //echo $_SESSION['eml']; 
  $mail=$_SESSION['eml']; 

?>

<?php include('connection.php');?>
<?php

$rn=$_GET['i'];
$sq=mysqli_query($con,"select * from studentendata where Rollno='$rn'");
$col=mysqli_fetch_array($sq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <form action="" method="post">
    <div class="form-group">

      

      <h2>Update Personal Data </h2>

      <label for="rollno">RollNo</label>
      <input type="text" class="form-control"  placeholder="Set RollNo" name="ui" value="<?php echo $col[1];?>">

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name Again" name="nm1" value="<?php echo $col[2];?>">

      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email Again" name="em1" value="<?php echo $col[3];?>">

      <label for="password">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password Again" name="pw" value="<?php echo $col[4];?>">

      <label for="Standard">Standard</label>
      <input type="number" class="form-control"  placeholder="Enter Standard" name="st" value="<?php echo $col[6];?>">

      <label for="sex">Sex</label>
      <input type="text" class="form-control"  placeholder="Enter Sex" name="se" value="<?php echo $col[7];?>">

      <label for="phoneno">Phoneno</label>
      <input type="text" class="form-control bg-danger" id="email" placeholder="Enter Phone number" name="pn" value="<?php echo $col[5];?>">

      <label for="address">Address</label>
    <textarea class="form-control"  id="" rows="2" name="ad" ><?php echo $col[8 ];?></textarea>


      <label for="phoneno">Status</label>
      <input type="number" class="form-control" placeholder="Set Student Status" name="sta" min="0" max="1" value="<?php echo $col[9];?>">



   <br>

   <input type="submit" class="btn btn-success" value="Done" name="dn">

    


  </form>
</div>

</body>
</html>




<?php

if (isset($_POST['dn']))
  {
  $rn=$_POST['ui'];
  $nm=$_POST['nm1'];
  $em=$_POST['em1'];
  $ps=$_POST['pw'];
  $std=$_POST['st'];
  $se=$_POST['se'];
  $pn=$_POST['pn'];
  $ad=$_POST['ad'];
  $sta=$_POST['sta'];



 

   $up=mysqli_query($con,"UPDATE studentendata SET Name='$nm', Email = '$em', Password = '$ps', Standard='$std',Phone = '$pn',Address='$ad',Status='$sta' WHERE Rollno = '$rn'");

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



 <a href="TeacherLogin.php" >Login First</a>
<?php
}
?> 
