
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
$sq=mysqli_query($con,"select * from teacherdata where User_id='$rn'");
$col=mysqli_fetch_array($sq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT TEACHER</title>
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

      <label for="rollno">ID</label>
      <input type="text" class="form-control"  placeholder="Set ID" name="ui"   value="<?php echo $col[0];?>" readonly="">

      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name Again" name="nm1" value="<?php echo $col[1];?>">

      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email Again" name="em1" value="<?php echo $col[2];?>">

      <label for="password">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password Again" name="pw" value="<?php echo $col[3];?>">

      <label for="age">AGE</label>
      <input type="number" class="form-control"  placeholder="Enter Age" name="ag" value="<?php echo $col[4];?>">

      <label for="subject">SUBJECT</label>
      <input type="text" class="form-control"  placeholder="Enter Subject" name="sb" value="<?php echo $col[5];?>">

      

        <label for="phoneno">PHONE</label>
      <input type="text" class="form-control bg-danger" id="email" placeholder="Enter Phone" name="pn" value="<?php echo $col[7];?>">

      <label for="address">Address</label>
    <textarea class="form-control"  id="" rows="2" name="ad" ><?php echo $col[8 ];?></textarea>


    



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
  $age=$_POST['ag'];
  $sb=$_POST['sb'];
  $pn=$_POST['pn'];
  $add=$_POST['ad'];


 

   $up=mysqli_query($con,"UPDATE teacherdata SET Name='$nm', Email = '$em', Password = '$ps', Age='$age',Subject = '$sb',Phoneno='$pn',Address='$add' WHERE User_id = '$rn'");

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
  header("location:TeacherLogin.php");
?>



 
<?php
}
?> 
